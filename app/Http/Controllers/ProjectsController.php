<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategoryTranslation;
use App\Models\ProjectTranslation;
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

        $dates = ProjectTranslation::select('published_at')->whereNotNull('published_at')->groupBy('published_at')->get();
        $categories = ProjectCategoryTranslation::select('name', 'slug')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'slug')->get();

        $aside = AsideController::get();

        return view('projects.index', compact('projects', 'dates', 'categories', 'aside'));
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
    public function show(string $locale, string $student, ProjectTranslation $project)
    {
        $projects = Project::with('course', 'student')->find($project->project_id);
        $course = $projects->course->translations->where('locale', $locale)->first();

        $student = $projects->student->translations->where('locale', $locale)->first();

        $alternatives = [];

        foreach ($projects->translations as $projectRef) {
            if ($projectRef->locale != app()->getLocale()) {
                $alternatives[] = $projectRef;
            } else {
                $project = $projectRef;
            }
        }


//        $studentId = StudentTranslation::without('projects', 'opportunity', 'company', 'internship')->select('student_id')->where('slug', $student)->where('locale', $locale)->first();
//        $student = Student::find(1)->first()->translations->where('locale', $locale)->first();

        $allCategories = Project::find($project->project_id)->categories;
        $categories = [];
        foreach ($allCategories as $category) {
            $categories[] = $category->translations->where('locale', $locale)->first();
        }

        $aside = AsideController::get();

        return view('projects.show', compact('project', 'alternatives', 'student', 'course', 'categories', 'aside'));
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
