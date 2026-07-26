<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function register()
    {
        return view('register');
    }

    public function saveRegister()
    {
        $model = new UserModel();

        $model->insert([
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            )
        ]);

        return redirect()->to('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function checkLogin()
{
    $model = new UserModel();

    $user = $model->where(
        'email',
        $this->request->getPost('email')
    )->first();

    if ($user && password_verify(
        $this->request->getPost('password'),
        $user['password']
    )) {

        session()->set('user', $user);

        return redirect()->to('/dashboard');
    }

    return redirect()->back()->with('error', 'Invalid Login');
}
public function logout()
{
    session()->destroy();

    return redirect()->to('/');
}
}