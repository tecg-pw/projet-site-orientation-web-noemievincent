<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategoryTranslation;
use App\Models\ArticleTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $url = request()->url();

        $news = Article::paginate(9);

        $dates = ArticleTranslation::select('published_at')->whereNotNull('published_at')->groupBy('published_at')->get();
        $categories = ArticleCategoryTranslation::select('name', 'slug')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'slug')->get();

        $aside = AsideController::get();

        return view('news.index', compact('url', 'news', 'dates', 'categories', 'aside'));
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
    public function show(string $locale, ArticleTranslation $article)
    {
        $articleRef = Article::find($article->article_id);

        $article = $articleRef->translations->where('locale', app()->getLocale())->first();

        $author = $articleRef->author;
        $category = $articleRef->category;

        $articles = Article::where('category_id', $articleRef->category_id)->get();

        $alternatives = [];
        foreach ($articleRef->translations as $translation) {
            if ($translation->locale != app()->getLocale()) {
                $alternatives[] = $translation;
            }
        }

        $aside = AsideController::get();

        return view('news.show', compact('article', 'alternatives', 'author', 'category', 'articles', 'aside'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        //
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
