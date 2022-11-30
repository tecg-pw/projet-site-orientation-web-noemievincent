<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Offer;

class AsideController extends Controller
{
    static function get()
    {
        $news = Article::latest('published_at')->limit(3)->get();
        $offers = Offer::latest('published_at')->limit(3)->get();

        return compact('news', 'offers');
    }
}
