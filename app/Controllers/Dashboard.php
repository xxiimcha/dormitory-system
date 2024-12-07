<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        // Check if the user is logged in
        if (!$this->isLoggedIn()) {
            return redirect()->to('/')->with('error', 'Please log in first.');
        }

        // Get session data
        $session = session();
        $data = [
            'title'    => 'Dashboard',
            'header'   => 'Dormitories',
            'username' => $session->get('username'),
            'role'     => $session->get('role'),
        ];

        // Render the view with the session data
        return view('dashboard/index', $data);
    }

    private function isLoggedIn(): bool
    {
        $session = session();
        return $session->get('is_logged_in') ?? false;
    }
}
