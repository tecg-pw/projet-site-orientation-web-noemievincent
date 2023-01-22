<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentTranslation;
use App\Models\Teacher;
use App\Models\TeacherTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TeacherController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(string $locale, TeacherTranslation $teacher)
    {
        $teacherRef = Teacher::find($teacher->teacher_id);
        $teacher = $teacherRef->translations->where('locale', app()->getLocale())->first();

        $courses = $teacherRef->courses;

        $aside = AsideController::get();

        if ($teacher->role == 'student_teacher') {
            if (StudentTranslation::where('slug', $teacher->slug)->exists()) {
                $studentId = StudentTranslation::where('slug', $teacher->slug)->first()->student_id;
                $projects = Student::find($studentId)->projects;

                return view('about.show-teacher', compact('teacher', 'courses', 'projects', 'aside'));
            }
        }

        return view('about.show-teacher', compact('teacher', 'courses', 'aside'));
    }
}
