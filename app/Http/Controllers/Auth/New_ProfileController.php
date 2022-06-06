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
}
