<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\TwoFactorLoginResponse as TwoFactorLoginResponseContract;

class TwoFactorLoginResponse implements TwoFactorLoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        $role = Auth::user()->roles->pluck('name')->toArray();

        if ($request->wantsJson()) {
            return response('', 204);
        }
        if (in_array('user', $role)) {
            return response()->view('partials.non_member');
        } else {
            return redirect('dashboard');
        }
    }
}
