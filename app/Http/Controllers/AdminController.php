<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function __invoke(Request $request)
    {
        if (Auth::check()) {
            if (auth()->user()->is_admin) {
                return redirect('/admin/nova');
            }
            return redirect('/');
        }

        return redirect(app()->getLocale() . '/login');
    }
}
