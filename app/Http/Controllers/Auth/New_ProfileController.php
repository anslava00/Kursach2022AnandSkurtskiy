<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class New_ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();
        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();

        return view('auth.new_profile', ['user' => $user, 'role' => $role]);
    }

//    public function show_Admin_Page(Request $request)
//    {
//        $user = Auth::user();
//        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();
//
//        return view('web.admin_page', ['user' => $user, 'role' => $role]);
//    }
}
