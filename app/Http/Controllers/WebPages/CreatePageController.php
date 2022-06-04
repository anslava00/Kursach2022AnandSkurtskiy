<?php

namespace App\Http\Controllers\WebPages;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CreatePageController extends Controller
{
    public function create_page_Form()
    {
        $user = Auth::user();
        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();
        return view('web.create_page', ['user' => $user, 'role' => $role]);
    }

    public function create_page()
    {
        return redirect(route('create_page'));
    }

}
