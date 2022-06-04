<?php

namespace App\Http\Controllers\WebPages;

use App\Models\RPDS;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class CheckPageController extends Controller
{
    public function check_page_Form(Request $request)
    {
        $user = Auth::user();
        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();
        $rpds = RPDS::all();
        $allowance = 2;
        $userRpd = $user->userRpd;
        $time_for_RPD = $userRpd->timeForRPD;
        return view('web.check_page', ['user' => $user,
                                            'role' => $role,
                                            'rpds' => $rpds,
                                            'time_for_RPD' => $time_for_RPD]);
    }

    public function check_page(Request $request)
    {
        $user = Auth::user();
        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();
        $rpds = RPDS::all();
        $allowance = 2;
        $userRpd = $user->userRpd;
        $time_for_RPD = $userRpd->timeForRPD;

        return redirect(route('check_page', ['user' => $user, 'role' => $role, 'rpds' => $rpds,  'time_for_RPD' => $time_for_RPD]));
    }


}
