<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use App\Models\Tool;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class ResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $documentations = Documentation::all();
        $tools = Tool::all();

        $aside = AsideController::get();

        return view('resources.index', compact('documentations', 'tools', 'aside'));
    }
}
