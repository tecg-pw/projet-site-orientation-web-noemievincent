<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Question;
use App\Models\Reply;
use App\Models\Tutorial;
use App\Models\TutorialTranslation;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(string $locale, User $user)
    {
        $url = request()->url();

        $questionsRefs = $user->questions;
        $questionsIds = [];
        foreach ($questionsRefs as $ref) {
            $questionsIds[] = $ref->id;
        }

        $questions = [];
        if (count($questionsIds) > 0) {
            $questions = Question::whereIn('id', $questionsIds)->paginate(3)->withQueryString();
        }

        $repliesRefs = $user->replies;
        $repliesIds = [];
        foreach ($repliesRefs as $ref) {
            $repliesIds[] = $ref->id;
        }

        $replies = [];
        if (count($repliesIds) > 0) {
            $replies = Reply::whereIn('id', $repliesIds)->paginate(3)->withQueryString();
        }

        $tutorials = $this->getTutorials($locale, $user);

        $languages = Language::all();

        $aside = AsideController::get();

        return view('profile.index', compact('url', 'user', 'questions', 'replies', 'tutorials', 'languages', 'aside'));
    }

    public function getTutorials(string $locale, User $user)
    {
        $tutorialsRefs = $user->tutorials;
        $tutorialsIds = [];
        foreach ($tutorialsRefs as $ref) {
            $tutorialsIds[] = $ref->id;
        }

        $tutorials = [];
        $search_term = request()->input('search_term') ?? '';
        $sort_by_language = request()->input('language') ?? 'all';

        if ($search_term) {
            $ids = [];

            $refs = TutorialTranslation::where('locale', $locale)
                ->whereIn('tutorial_id', $tutorialsIds)
                ->where(function ($query) use ($search_term) {
                    $query->where('title', 'like', '%' . $search_term . '%')
                        ->orWhere('description', 'like', '%' . $search_term . '%')
                        ->get();
                })
                ->get();

            foreach ($refs as $ref) {
                $ids[] = $ref->tutorial_id;
            }

            if (count($ids) > 0) {
                $tutorials = Tutorial::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_language === 'all') {
            $tutorials = Tutorial::whereIn('id', $tutorialsIds)->paginate()->withQueryString();
        } elseif ($sort_by_language) {
            $language = Language::where('slug', $sort_by_language)->first();

            $ids = [];
            foreach ($language->tutorials as $tutorial) {
                if (in_array($tutorial->id, $tutorialsIds)) {
                    $ids[] = $tutorial->id;
                }
            }

            if (count($ids) > 0) {
                $tutorials = Tutorial::whereIn('id', $ids)->paginate()->withQueryString();
            }
        }

        return $tutorials;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function ajax(string $locale, User $user)
    {
        $tutorials = $this->getTutorials($locale, $user);

        return view('components.tutorials.paginated_tutorials', compact('tutorials'));
    }

    public function edit(string $locale, User $user)
    {
        if (auth()->user()->id != $user->id) {
            return redirect('/' . app()->getLocale() . '/users/' . $user->slug);
        }
        return view('profile.edit', compact('user'));
    }
}
