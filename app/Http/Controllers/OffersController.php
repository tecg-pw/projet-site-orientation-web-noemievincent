<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Offer;
use App\Models\Skill;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $offers = Offer::with('company')->paginate(9);

        $companies = Company::all();
        $locations = Offer::without('skills')->select('location')->groupBy('location')->get();

        $aside = AsideController::get();

        return view('jobs.index', compact('offers', 'companies', 'locations', 'aside'));
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
    public function show(Company $company, Offer $offer)
    {
        $aside = AsideController::get();

        return view('jobs.show', compact('company', 'offer', 'aside'));
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