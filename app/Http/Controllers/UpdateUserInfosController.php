<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserInfosRequest;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Str;

class UpdateUserInfosController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function __invoke(string $locale, User $user, UpdateUserInfosRequest $request)
    {
        $validatedData = $request->safe()->all();
        $validatedData['fullname'] = $validatedData['firstname'] . ' ' . $validatedData['lastname'];
        $validatedData['slug'] = Str::slug($validatedData['fullname']);

        $user->update($validatedData);

        return redirect('/' . app()->getLocale() . '/users/' . $user->slug . '/')->with('success', __('success.update_infos'));
    }
}
