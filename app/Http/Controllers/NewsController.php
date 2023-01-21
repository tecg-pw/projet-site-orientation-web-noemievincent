<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleCategoryTranslation;
use App\Models\ArticleTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(string $locale)
    {
        $url = request()->url();

        $news = $this->getArticles($locale);

        $dateRefs = ArticleTranslation::select('published_at')->whereNotNull('published_at')->groupBy('published_at')->get();

        $dates = [];
        foreach ($dateRefs as $date) {
            $dates[] = $date->published_at->format('Y');
        }

        $dates = array_unique($dates);
        $categories = ArticleCategoryTranslation::select('name', 'slug')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'slug')->get();

        $aside = AsideController::get();

        return view('news.index', compact('url', 'news', 'dates', 'categories', 'aside'));
    }

    public function getArticles(string $locale)
    {
        $articles = [];
        $search_term = request()->input('search_term') ?? '';
        $sort_by_category = request()->input('category') ?? 'all';
        $sort_by_date = request()->input('date') ?? 'all';

        if ($search_term) {
            $ids = [];

            $refs = ArticleTranslation::where('locale', $locale)
                ->where('title', 'like', '%' . $search_term . '%')
                ->get();

            foreach ($refs as $ref) {
                $ids[] = $ref->article_id;
            }

            if (count($ids) > 0) {
                $articles = Article::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_category === 'all' && $sort_by_date === 'all') {
            $articles = Article::paginate()->withQueryString();
        } elseif ($sort_by_date === 'all') {
            $category_id = ArticleCategoryTranslation::where('locale', $locale)->where('slug', $sort_by_category)->first()->id;
            $category = ArticleCategory::find($category_id);

            $ids = [];
            foreach ($category->articles as $p) {
                $ids[] = $p->id;
            }

            if (count($ids) > 0) {
                $articles = Article::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_category === 'all') {
            $refs = ArticleTranslation::where('locale', $locale)
                ->whereDate('published_at', 'like', '%' . $sort_by_date . '%')
                ->get();

            $ids = [];
            foreach ($refs as $ref) {
                $ids[] = $ref->article_id;
            }

            if (count($ids) > 0) {
                $articles = Article::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_category && $sort_by_date) {
            $category_id = ArticleCategoryTranslation::where('locale', $locale)->where('slug', $sort_by_category)->first()->id;
            $category = ArticleCategory::find($category_id);

            $cat_ids = [];
            foreach ($category->articles as $p) {
                $cat_ids[] = $p->id;
            }

            $date_refs = ArticleTranslation::where('locale', $locale)
                ->whereIn('article_id', $cat_ids)
                ->whereDate('published_at', 'like', '%' . $sort_by_date . '%')
                ->get();

            $ids = [];
            foreach ($date_refs as $ref) {
                $ids[] = $ref->article_id;
            }

            if (count($ids) > 0) {
                $articles = Article::whereIn('id', $ids)->paginate()->withQueryString();
            }
        }

        return $articles;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function ajax(string $locale)
    {
        $news = $this->getArticles($locale);

        return view('components.news.paginated_news', compact('news'));
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
}
