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
}
