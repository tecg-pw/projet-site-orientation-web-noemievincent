<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Offer;

class AsideController extends Controller
{
    static function get()
    {
        $allNews = Article::limit(3)->get();
        $news = [];
        foreach ($allNews as $new) {
            $news[] = $new->translations->where('locale', app()->getLocale())->first();
        }


        $allOffers = Offer::limit(3)->get();
        $offers = [];
        foreach ($allOffers as $offer) {
            $offers[] = $offer->translations->where('locale', app()->getLocale())->first();
        }

        return compact('news', 'offers');
    }
}
