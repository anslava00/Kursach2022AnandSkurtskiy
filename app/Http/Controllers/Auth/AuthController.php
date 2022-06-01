<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\BaseLoginFormRequest;
use App\Http\Requests\BaseRegistrationFormRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loginForm()
    {
        return view('auth.login');
    }

    /**
     * @param BaseLoginFormRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(BaseLoginFormRequest $request)
    {
        $data = $request->validated();

        if(Auth::attempt($data, true))
        {
            $request->session()->regenerate();

            return redirect(route('profile'));
        }

        return back()->withErrors([
            'email' => 'Maybe email invalid',
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function registrationForm()
    {
        return view('auth.registration');
    }

    /**
     * @param BaseRegistrationFormRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function registration(BaseRegistrationFormRequest $request)
    {
        $data = $request->validated();

        $user = User::createFromRequest($data);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect(route('auth.profile'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
