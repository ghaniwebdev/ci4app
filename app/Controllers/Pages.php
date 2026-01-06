<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('home_page');
    }

    public function about(): string
    {
        return view('about_page');
    }
}
