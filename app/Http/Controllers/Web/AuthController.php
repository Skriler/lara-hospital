<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Redirect;

class AuthController extends Controller
{
    public function getLoginPage()
    {
        return view('pages.user-side.login-page');
    }

    public function login(Request $request)
    {
        $user = User::where('username', $request->input('username'))->first();

        if ($user == null || $request->input('password') != $user->password)
            return Redirect::route('user-side.auth.login');

        Auth::login($user, true);

        return Redirect::route('control-panel.surgeon.add');
    }

    public function logout()
    {
        Auth::logout();
        return Redirect::route('user-side.main-page');
    }
}
