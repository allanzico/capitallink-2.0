<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;

use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade

        $role = Auth::user()->roles->pluck('name')->toArray();
        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }
        if (in_array('user', $role)) {
            return response()->view('partials.non_member');
        } else {
            return redirect('dashboard');
        }
        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended(config('fortify.home'));
    }
}
