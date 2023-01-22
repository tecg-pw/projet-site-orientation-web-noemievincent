<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class CourseController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(string $locale, CourseTranslation $course)
    {
        $courseRef = Course::find($course->course_id);
        $course = $courseRef->translations->where('locale', app()->getLocale())->first();

        $teachers = $courseRef->teachers;
        $projects = $courseRef->projects;

        $aside = AsideController::get();

        return view('about.show-class', compact('course', 'teachers', 'projects', 'aside'));
    }
}
