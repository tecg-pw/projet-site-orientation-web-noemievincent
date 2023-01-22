<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyTranslation;
use App\Models\Offer;
use App\Models\OfferTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $url = request()->url();

        $offers = Offer::paginate(9);

        $dates = OfferTranslation::select('published_at')->whereNotNull('published_at')->groupBy('published_at')->get();
        $companies = CompanyTranslation::select('name', 'slug')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'slug')->get();
        $locations = OfferTranslation::without('skills')->select('location')->groupBy('location')->get();

        $aside = AsideController::get();

        return view('jobs.index', compact('url', 'offers', 'dates', 'companies', 'locations', 'aside'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(string $locale, CompanyTranslation $company, string $offer)
    {
        $companyRef = Company::find($company->company_id);
        $company = $companyRef->translations->where('locale', app()->getLocale())->first();

        foreach ($companyRef->offers as $o) {
            if ($o->translations->where('locale', app()->getLocale())->first()->slug === $offer) {
                $offerRef = $o;
            }
        }

        $offer = $offerRef->translations->where('locale', app()->getLocale())->first();
        $skills = json_decode($offer->skills);

        $alternatives = [];
        foreach ($offerRef->translations as $translation) {
            if ($translation->locale != app()->getLocale()) {
                $alternatives[] = $translation;
            }
        }

        $aside = AsideController::get();

        return view('jobs.show', compact('company', 'alternatives', 'offer', 'skills', 'aside'));
    }
}
