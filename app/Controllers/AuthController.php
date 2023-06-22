<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Myth\Auth\Authentication\LocalAuthenticator;
use Myth\Auth\Models\UserModel;

class AuthController extends Controller
{
    protected $auth;

    public function __construct()
    {
        $this->auth = new LocalAuthenticator();
    }

    public function login()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $remember = (bool) $this->request->getPost('remember');

            if ($this->auth->attempt([$this->auth->identityColumn => $email, 'password' => $password], $remember)) {
                return redirect()->to('/');
            } else {
                $data['error'] = $this->auth->error() ?? lang('Auth.badAttempt');
            }
        }

        return view('login', $data);
    }

    public function register()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'email' => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[8]',
                'password_confirm' => 'required|matches[password]'
            ];

            if ($this->validate($validationRules)) {
                $email = $this->request->getPost('email');
                $password = $this->request->getPost('password');

                $userModel = new UserModel();
                $user = $userModel->skipValidation()->insert([
                    'email' => $email,
                    'password' => $password
                ]);

                if ($user) {
                    $this->auth->login($user);
                    return redirect()->to('/');
                } else {
                    $data['error'] = lang('Auth.registrationFailed');
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return view('register', $data);
    }

    public function forgotPassword()
    {
        $data = [];

        if ($this->request->getMethod() === 'post') {
            $email = $this->request->getPost('email');

            if ($this->auth->forgotPassword($email)) {
                $data['success'] = lang('Auth.forgotSuccess');
            } else {
                $data['error'] = $this->auth->error() ?? lang('Auth.forgotFailed');
            }
        }

        return view('forgot_password', $data);
    }
}
