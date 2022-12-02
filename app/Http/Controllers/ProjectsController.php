<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Student;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $projects = Project::paginate(9);

//        $dates = Project::without('categories')->select('published_at')->whereNotNull('published_at')->groupBy('published_at')->get();
//        $categories = ProjectCategory::select('name')->whereNotNull('name')->groupBy('name')->get();

        $aside = AsideController::get();

//        return view('projects.index', compact('projects', 'dates', 'categories', 'aside'));
        return view('projects.index', compact('projects', 'aside'));
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
    public function show(Student $student, Project $project)
    {
        $aside = AsideController::get();

        return view('projects.show', compact('project', 'student', 'aside'));
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
