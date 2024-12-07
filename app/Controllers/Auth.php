<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        // If user is already logged in, redirect to dashboard
        $session = session();
        if ($session->get('is_logged_in')) {
            return redirect()->to('/dashboard');
        }

        return view('auth/login');
    }

    public function processLogin()
    {
        // Initialize session and load the UserModel
        $session = session();
        $model = new UserModel();

        // Get the submitted username and password
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Find the user by username or email
        $user = $model->where('username', $username)
                      ->orWhere('email', $username)
                      ->first();

        // Validate credentials
        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            $session->set([
                'user_id'     => $user['id'],
                'username'    => $user['username'],
                'role'        => $user['role'],
                'is_logged_in' => true,
            ]);

            // Redirect to the dashboard
            return redirect()->to('/dashboard')->with('success', 'Welcome back, ' . $user['username'] . '!');
        } else {
            // Redirect back to login with error message
            return redirect()->back()->with('error', 'Invalid username or password.');
        }
    }

    public function logout()
    {
        // Destroy the session and redirect to the landing page (/)
        session()->destroy();
        return redirect()->to('/')->with('success', 'You have successfully logged out.');
    }
}
