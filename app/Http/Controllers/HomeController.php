<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Question;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $projects = Project::with('student')->limit(6)->get();
        $questions = Question::latest('published_at')->limit(6)->get();

        $aside = AsideController::get();

        return view('index', compact('projects', 'questions', 'aside'));
    }
}
