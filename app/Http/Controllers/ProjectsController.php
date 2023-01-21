<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\ProjectCategoryTranslation;
use App\Models\ProjectTranslation;
use App\Models\Student;
use App\Models\StudentTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

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

        $projects = $this->getProjects($locale);

        $dates = ProjectTranslation::select('published_at')->whereNotNull('published_at')->groupBy('published_at')->get();
        $categories = ProjectCategoryTranslation::select('name', 'slug')->where('locale', app()->getLocale())->whereNotNull('name')->groupBy('name', 'slug')->get();

        $aside = AsideController::get();

        return view('projects.index', compact('url', 'projects', 'dates', 'categories', 'aside'));
    }

    public function getProjects(string $locale)
    {
        $projects = [];
        $search_term = request()->input('search_term') ?? '';
        $sort_by_category = request()->input('category') ?? 'all';
        $sort_by_date = request()->input('date') ?? 'all';

        if ($search_term) {
            $ids = [];

            $refs = ProjectTranslation::where('locale', $locale)
                ->where('title', 'like', '%' . $search_term . '%')
                ->get();

            foreach ($refs as $ref) {
                $ids[] = $ref->project_id;
            }

            if (count($ids) > 0) {
                $projects = Project::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_category === 'all' && $sort_by_date === 'all') {
            $projects = Project::paginate()->withQueryString();
        } elseif ($sort_by_date === 'all') {
            $category_id = ProjectCategoryTranslation::where('locale', $locale)->where('slug', $sort_by_category)->first()->id;
            $category = ProjectCategory::find($category_id);

            $ids = [];
            foreach ($category->projects as $p) {
                $ids[] = $p->id;
            }

            if (count($ids) > 0) {
                $projects = Project::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_category === 'all') {
            $refs = ProjectTranslation::where('locale', $locale)
                ->whereDate('published_at', 'like', '%' . $sort_by_date . '%')
                ->get();

            $ids = [];
            foreach ($refs as $ref) {
                $ids[] = $ref->project_id;
            }

            if (count($ids) > 0) {
                $projects = Project::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_category && $sort_by_date) {
            $category_id = ProjectCategoryTranslation::where('locale', $locale)->where('slug', $sort_by_category)->first()->id;
            $category = ProjectCategory::find($category_id);

            $cat_ids = [];
            foreach ($category->projects as $p) {
                $cat_ids[] = $p->id;
            }

            $date_refs = ProjectTranslation::where('locale', $locale)
                ->whereIn('project_id', $cat_ids)
                ->whereDate('published_at', 'like', '%' . $sort_by_date . '%')
                ->get();

            $ids = [];
            foreach ($date_refs as $ref) {
                $ids[] = $ref->project_id;
            }

            if (count($ids) > 0) {
                $projects = Project::whereIn('id', $ids)->paginate()->withQueryString();
            }
        }

        return $projects;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function ajax(string $locale)
    {
        $projects = $this->getProjects($locale);

        return view('components.projects.paginated_projects', compact('projects'));
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

        $otherProjects = $studentRef->projects->where('id', '!=', $projectRef->id)->take(3);

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
}
