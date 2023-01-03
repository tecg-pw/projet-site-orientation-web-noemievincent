<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserPasswordRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UpdateUserPasswordController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function __invoke(string $locale, User $user, UpdateUserPasswordRequest $request)
    {
        $validatedData = $request->safe()->all();

        $validatedData['password'] = password_hash($validatedData['new-password'], PASSWORD_DEFAULT);
        $user->update($validatedData);

        return redirect('/' . app()->getLocale() . '/users/' . $user->slug . '/')->with('success', __('success.update_password'));
    }
}
