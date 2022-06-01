<?php

namespace App\Http\Controllers\WebPages;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class EditPageController extends Controller
{
    public function edit_page_Form()
    {
        $user = Auth::user();
        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();
        return view('web.edit_page', ['user' => $user, 'role' => $role]);
    }

    public function edit_page()
    {
        return redirect(route('edit_page'));
    }
}
