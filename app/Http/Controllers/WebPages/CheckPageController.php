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

        return view('web.check_page', ['user' => $user,
                                            'role' => $role,
                                            'rpds' => $rpds,]);
    }

    public function check_page(Request $request)
    {
        $user = Auth::user();
        $role = User::with('roles')->find($user['id'])->roles->pluck('name')->first();
        $rpds = RPDS::all();


        return redirect(route('check_page', ['user' => $user, 'role' => $role, 'rpds' => $rpds]));
    }

//    public function getRPD_info(Request $request)
//    {
//        $rpds = RPDS::all();
////        $id =
//    }

}
