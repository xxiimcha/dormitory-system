<?php

namespace App\Controllers;

class CriteriaController extends BaseController
{
    public function index()
    {
        return view('criteria/index', [
            'title' => 'Criteria'
        ]);
    }
}
