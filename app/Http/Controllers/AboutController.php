<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Opportunity;
use App\Models\Teacher;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

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
}
