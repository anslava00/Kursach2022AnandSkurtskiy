<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\BaseLoginFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = Auth::user();
        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();

        return view('auth.profile', ['user' => $user, 'role' => $role]);
    }

    public function show_Admin_Page(Request $request)
    {
        $user = Auth::user();
        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();

        return view('web.admin_page', ['user' => $user, 'role' => $role]);
    }

    public function show_How_to_Use()
    {
        $user = Auth::user();
        return view('how_to_use', ['user' => $user]);
    }
}
