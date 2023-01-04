<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuestionRequest;
use App\Models\Post;
use App\Models\Question;
use App\Models\QuestionCategoryTranslation;
use App\Models\Reply;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Str;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $questions = Question::with('user')->latest('published_at')->paginate(5);
        $replies = Reply::with('user')->latest('published_at')->paginate(5);

        //filters
        $categories = QuestionCategoryTranslation::select('name', 'slug')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'slug')->get();

        $aside = AsideController::get();

        return view('forum.index', compact('questions', 'replies', 'categories', 'aside'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(string $locale, QuestionRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['slug'] = Str::slug($validatedData['title']) . '_' . uuid_create();
        $validatedData['user_id'] = auth()->id();

        $question = Question::create($validatedData);

        return redirect('/' . app()->getLocale() . '/forum/questions/' . $question->slug);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        //filters
        $categories = QuestionCategoryTranslation::select('name', 'category_id')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'category_id')->get();

        $aside = AsideController::get();

        return view('forum.create', compact('categories', 'aside'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(string $locale, Question $question)
    {
        $replies = Reply::where('question_id', $question->id)->get();

        $aside = AsideController::get();

        return view('forum.show', compact('question', 'replies', 'aside'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit(string $locale, Question $question)
    {
        $categories = QuestionCategoryTranslation::select('name', 'category_id')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'category_id')->get();

        $aside = AsideController::get();

        return view('forum.edit', compact('question', 'categories', 'aside'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function update(string $locale, Question $question, QuestionRequest $request)
    {
        $uuid = explode('_', $question->slug)[1];

        $validatedData = $request->validated();
        $validatedData['slug'] = Str::slug($validatedData['title']) . '_' . $uuid;
        $validatedData['user_id'] = auth()->id();

        $question->update($validatedData);

        return redirect('/' . app()->getLocale() . '/forum/questions/' . $question->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy(string $locale, Question $question)
    {
        $question->delete();
        return redirect('/' . app()->getLocale() . '/forum');
    }
}
