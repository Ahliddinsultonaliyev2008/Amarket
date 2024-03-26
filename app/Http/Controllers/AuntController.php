<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isFalse;

class AuntController extends Controller
{


    public function login()
    {
        return view('auth.login');
    }

    public function loginStore(Request $request)
    {
        $user = User::where('phone', $request->get('phone'))->get()->first();

        if (!is_null($user))

            if (
                \Hash::check($request->get('password'), $user->password) &&
                $user->role === User::roles['admin']
            ) {
                Auth::login($user);

                return redirect()->route('admin.dashboard.index');
            }
        return redirect()->route('auth.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
