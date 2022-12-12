<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Offer;

class AsideController extends Controller
{
    static function get()
    {
        $news = Article::limit(3)->get();

        $offers = Offer::limit(3)->get();

        return compact('news', 'offers');
    }
}
