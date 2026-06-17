<?php

namespace App\Controllers;

class Profile extends BaseController
{
    public function index()
    {
        $session = session();

        $data = [
            'username' => $session->get('username'),
            'email' => $session->get('email'),
            'role' => $session->get('role'),
            'login_time' => $session->get('login_time'),
            'status' => $session->get('isLoggedIn') ? 'Online' : 'Offline'
        ];

        return view('profile', $data);
    }
}