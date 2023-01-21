<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AlumnisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $url = request()->url();

        $alumnis = Student::paginate(9);

        $dates = StudentTranslation::select('end_year')->whereNotNull('end_year')->groupBy('end_year')->get();

        $aside = AsideController::get();

        return view('alumnis.index', compact('url', 'alumnis', 'dates', 'aside'));
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
    public function show(string $locale, StudentTranslation $alumni)
    {
        $alumniRef = Student::find($alumni->student_id);
        $alumni = $alumniRef->translations->where('locale', $locale)->first();

        $internship = $alumniRef->internship;
        $opportunity = $alumniRef->opportunity;
        $company = $alumniRef->company;

        $projects = $alumniRef->projects;

        $aside = AsideController::get();

        return view('alumnis.show', compact('alumni', 'internship', 'opportunity', 'company', 'projects', 'aside'));
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
