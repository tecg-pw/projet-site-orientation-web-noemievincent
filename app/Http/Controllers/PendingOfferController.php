<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePendingOfferRequest;
use App\Http\Uploads\HandlesCompanyLogoUploads;
use App\Models\PendingOffer;
use App\Models\Skill;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PendingOfferController extends Controller
{
    use HandlesCompanyLogoUploads;

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(string $locale, StorePendingOfferRequest $request)
    {
        $validatedData = $request->safe()->except(['applications_email', 'applications_url']);

        $uploaded_file = $request->file('company_logo');
        $validatedData['company_logo'] = $this->saveWithPendingOffer($uploaded_file);

        $validatedData['skills'] = json_encode($validatedData['skills']);
        $validatedData['add_skill'] = json_encode(explode(',', $validatedData['add_skill']));

        $validatedData['start_date'] = Carbon::parse($validatedData['start_date'])->toDateTimeString();

        $applications_link = 'applications_' . $validatedData['reception_mode'];
        $validatedData['applications_link'] = $request->safe()->only($applications_link)[$applications_link];

        $offer = PendingOffer::create($validatedData);

        return $offer;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $skills = Skill::all();

        $aside = AsideController::get();

        return view('jobs.create', compact('skills', 'aside'));
    }
}
