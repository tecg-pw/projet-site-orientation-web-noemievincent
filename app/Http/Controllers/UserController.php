<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Question;
use App\Models\Reply;
use App\Models\Tutorial;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(string $locale, User $user)
    {
        $url = request()->url();

        $questionsRefs = $user->questions;
        $questionsIds = [];
        foreach ($questionsRefs as $ref) {
            $questionsIds[] = $ref->id;
        }

        $questions = [];
        if (count($questionsIds) > 0) {
            $questions = Question::whereIn('id', $questionsIds)->paginate(3)->withQueryString();
        }

        $repliesRefs = $user->replies;
        $repliesIds = [];
        foreach ($repliesRefs as $ref) {
            $repliesIds[] = $ref->id;
        }

        $replies = [];
        if (count($repliesIds) > 0) {
            $replies = Reply::whereIn('id', $repliesIds)->paginate(3)->withQueryString();
        }

        $tutorialsRefs = $user->tutorials;
        $tutorialsIds = [];
        foreach ($tutorialsRefs as $ref) {
            $tutorialsIds[] = $ref->id;
        }

        $tutorials = [];
        if (count($tutorialsIds) > 0) {
            $tutorials = Tutorial::whereIn('id', $tutorialsIds)->paginate(3)->withQueryString();
        }

        $languages = Language::all();

        $aside = AsideController::get();

        return view('profile.index', compact('url', 'user', 'questions', 'replies', 'tutorials', 'languages', 'aside'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(string $locale, User $user)
    {
        if (auth()->user()->id != $user->id) {
            return redirect('/' . app()->getLocale() . '/users/' . $user->slug);
        }
        return view('profile.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
