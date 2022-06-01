<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function show()
    {
        return view('main_page');
    }

    public function redirectToLoginForm()
    {
        return redirect(route('login'));
    }

    public function redirectToRegistrationForm()
    {
        return redirect(route('registration'));

    }
}
