<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Opportunity;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $allCourses = Course::get();
        $courses = [];
        foreach ($allCourses as $course) {
            $courses[] = $course->translations->where('locale', app()->getLocale())->first();
        }

        $allTeachers = Teacher::get();
        $teachers = [];
        foreach ($allTeachers as $teacher) {
            $teachers[] = $teacher->translations->where('locale', app()->getLocale())->first();
        }

        $allOpportunities = Opportunity::get();
        $opportunities = [];
        foreach ($allOpportunities as $opportunity) {
            $opportunities[] = $opportunity->translations->where('locale', app()->getLocale())->first();
        }

        $aside = AsideController::get();

        return view('about.index', compact('courses', 'teachers', 'opportunities', 'aside'));
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
     * @return Response
     */
    public function show($id)
    {
        //
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
