<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleTranslation;
use App\Models\Project;
use App\Models\ProjectTranslation;
use App\Models\Question;
use App\Models\Tutorial;
use App\Models\TutorialTranslation;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class SearchController extends Controller
{
    private array $results = [];

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(string $locale)
    {
        $search_term = request()->input('search_term') ?? '';

        if ($search_term) {
            $this->projects($locale, $search_term);
            $this->questions($locale, $search_term);
            $this->tutorials($locale, $search_term);
            $this->news($locale, $search_term);
            $this->users($locale, $search_term);
        }

        $results = $this->results;

        $total = 0;

        if (count($results) > 0) {
            foreach ($results as $result) {
                $total += count($result);
            }
        }

        $aside = AsideController::get();

        return view('search', compact('search_term', 'results', 'total', 'aside'));
    }
    
    private function projects(string $locale, string $search_term): void
    {
        $ids = [];

        $projectsRefs = ProjectTranslation::where('locale', $locale)
            ->where('title', 'like', '%' . $search_term . '%')
            ->get();

        foreach ($projectsRefs as $ref) {
            $ids[] = $ref->project_id;
        }

        if (count($ids) > 0) {
            $this->results['projects'] = Project::whereIn('id', $ids)->get();
        }
    }

    private function questions(string $locale, string $search_term): void
    {
        $questions = Question::where(function ($query) use ($search_term) {
            $query->where('title', 'like', '%' . $search_term . '%')
                ->orWhere('body', 'like', '%' . $search_term . '%');
        })->get();

        if (count($questions) > 0) {
            $this->results['questions'] = $questions;
        }
    }

    private function tutorials(string $locale, string $search_term): void
    {
        $ids = [];

        $tutorialsRefs = TutorialTranslation::where('locale', $locale)
            ->where(function ($query) use ($search_term) {
                $query->where('title', 'like', '%' . $search_term . '%')
                    ->orWhere('description', 'like', '%' . $search_term . '%');
            })
            ->get();

        foreach ($tutorialsRefs as $ref) {
            $ids[] = $ref->tutorial_id;
        }

        if (count($ids) > 0) {
            $this->results['tutorials'] = Tutorial::whereIn('id', $ids)->get();
        }
    }

    private function news(string $locale, string $search_term): void
    {
        $ids = [];

        $newsRefs = ArticleTranslation::where('locale', $locale)
            ->where(function ($query) use ($search_term) {
                $query->where('title', 'like', '%' . $search_term . '%')
                    ->orWhere('excerpt', 'like', '%' . $search_term . '%');
            })
            ->get();

        foreach ($newsRefs as $ref) {
            $ids[] = $ref->article_id;
        }

        if (count($ids) > 0) {
            $this->results['news'] = Article::whereIn('id', $ids)->get();
        }
    }

    private function users(string $locale, string $search_term): void
    {
        $users = User::where(function ($query) use ($search_term) {
            $query->where('firstname', 'like', '%' . $search_term . '%')
                ->orWhere('lastname', 'like', '%' . $search_term . '%')
                ->orWhere('email', 'like', '%' . $search_term . '%');
        })->get();

        if (count($users) > 0) {
            $this->results['users'] = $users;
        }
    }

}
