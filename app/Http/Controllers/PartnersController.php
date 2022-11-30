<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Offer;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PartnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $partners = Company::paginate(9);

        //filters
        $companies = Company::get();
        $locations = Offer::without('company')->select('location')->groupBy('location')->get();
        
        return view('partners.index', compact('partners', 'companies', 'locations'));
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
    public function show(Company $company)
    {
        $members = Company::find($company->id)->members()->get();
        $offers = Company::find($company->id)->offers()->get();
        $students = Company::find($company->id)->students()->get();

        return view('partners.show', compact('company', 'members', 'offers', 'students'));
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
