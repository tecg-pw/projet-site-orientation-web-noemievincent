<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategoryTranslation;
use App\Models\ProjectTranslation;
use App\Models\Student;
use App\Models\StudentTranslation;
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
    public function index(string $locale)
    {
        $url = request()->url();

        $projects = [];
        $search_term = request()->input('search_term') ?? '';

        if ($search_term) {
            $ids = [];

            $projectsRefs = ProjectTranslation::where('locale', $locale)
                ->where('title', 'like', '%' . $search_term . '%')
                ->get();

            foreach ($projectsRefs as $ref) {
                $ids[] = $ref->project_id;
            }

            if (count($ids) > 0) {
                $projects = Project::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } else {
            $projects = Project::paginate()->withQueryString();
        }

        $dates = ProjectTranslation::select('published_at')->whereNotNull('published_at')->groupBy('published_at')->get();
        $categories = ProjectCategoryTranslation::select('name', 'slug')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'slug')->get();

        $aside = AsideController::get();

        return view('projects.index', compact('url','projects', 'dates', 'categories', 'aside'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function ajax(string $locale)
    {
        $projects = [];
        $search_term = request()->input('search_term') ?? '';

        if ($search_term) {
            $ids = [];

            $projectsRefs = ProjectTranslation::where('locale', $locale)
                ->where('title', 'like', '%' . $search_term . '%')
                ->get();

            foreach ($projectsRefs as $ref) {
                $ids[] = $ref->project_id;
            }

            if (count($ids) > 0) {
                $projects = Project::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } else {
            $projects = Project::paginate()->withQueryString();
        }

        return view('components.projects.paginated_projects', compact('projects'));
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
    public function show(string $locale, StudentTranslation $student, string $project)
    {
        $studentRef = Student::find($student->student_id);
        $student = $studentRef->translations->where('locale', $locale)->first();

        foreach ($studentRef->projects as $p) {
            if ($p->translations->where('locale', app()->getLocale())->first()->slug === $project) {
                $projectRef = $p;
            }
        }

        $project = $projectRef->translations->where('locale', $locale)->first();

        $course = $projectRef->course->translations->where('locale', $locale)->first();

        $otherProjects = $studentRef->projects->where('id', '!=', $projectRef->id)->take();

        $alternatives = [];
        foreach ($projectRef->translations as $translation) {
            if ($translation->locale != app()->getLocale()) {
                $alternatives[] = $translation;
            }
        }

        $allCategories = Project::find($projectRef->id)->categories;
        $categories = [];
        foreach ($allCategories as $category) {
            $categories[] = $category->translations->where('locale', $locale)->first();
        }

        $aside = AsideController::get();

        return view('projects.show', compact('project', 'alternatives', 'student', 'otherProjects', 'course', 'categories', 'aside'));
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
