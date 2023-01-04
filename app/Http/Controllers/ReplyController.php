<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReplyRequest;
use App\Models\Question;
use App\Models\Reply;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ReplyController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(string $locale, Question $question, ReplyRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['user_id'] = auth()->id();
        $validatedData['question_id'] = $question->id;

        $reply = Reply::create($validatedData);

        return redirect('/' . app()->getLocale() . '/forum/questions/' . $question->slug . '#reply-' . $reply->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(string $locale, string $slug, Reply $reply, ReplyRequest $request)
    {
        $validatedData = $request->validated();

        $reply->update($validatedData);

        return redirect('/' . app()->getLocale() . '/forum/questions/' . $slug . '#reply-' . $reply->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(string $locale, string $slug, Reply $reply)
    {
        $reply->delete();
        return redirect('/' . app()->getLocale() . '/forum/questions/' . $slug);
    }
}
