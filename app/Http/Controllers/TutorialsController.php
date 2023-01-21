<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTutorialFavoriteRequest;
use App\Models\Language;
use App\Models\Tutorial;
use App\Models\TutorialTranslation;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class TutorialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(string $locale)
    {
        $url = request()->url();

        $tutorials = $this->getTutorials($locale);

        $languages = Language::all();

        $aside = AsideController::get();

        return view('tutorials.index', compact('url', 'tutorials', 'languages', 'aside'));
    }

    public function getTutorials(string $locale)
    {
        $tutorials = [];
        $search_term = request()->input('search_term') ?? '';
        $sort_by_language = request()->input('language') ?? 'all';

        if ($search_term) {
            $ids = [];

            $refs = TutorialTranslation::where('locale', $locale)
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
            $tutorials = Tutorial::paginate()->withQueryString();
        } elseif ($sort_by_language) {
            $language = Language::where('slug', $sort_by_language)->first();

            $ids = [];
            foreach ($language->tutorials as $p) {
                $ids[] = $p->id;
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
    public function ajax(string $locale)
    {
        $tutorials = $this->getTutorials($locale);

        return view('components.tutorials.paginated_tutorials', compact('tutorials'));
    }

    public function saveFavorite(StoreTutorialFavoriteRequest $request)
    {
        $validated = $request->validated();

        $status = DB::table('tutorial_user')
            ->where('user_id', $validated['user_id'])
            ->where('tutorial_id', $validated['tuto_id'])
            ->first();

        if ($status) {
            DB::table('tutorial_user')->where('id', $status->id)->delete();
        } else {
            DB::table('tutorial_user')->insert([
                'tutorial_id' => $validated['tuto_id'],
                'user_id' => $validated['user_id'],
            ]);
        }

        return redirect()->back();
    }

    public function ajaxSaveFavorite(string $locale, StoreTutorialFavoriteRequest $request)
    {
        $validated = $request->validated();

        $status = DB::table('tutorial_user')
            ->where('user_id', $validated['user_id'])
            ->where('tutorial_id', $validated['tuto_id'])
            ->first();

        if ($status) {
            DB::table('tutorial_user')->where('id', $status->id)->delete();
            $is_favorite = false;
        } else {
            DB::table('tutorial_user')->insert([
                'tutorial_id' => $validated['tuto_id'],
                'user_id' => $validated['user_id'],
            ]);
            $is_favorite = true;
        }

        $tutorial = TutorialTranslation::where('locale', $locale)->where('tutorial_id', $validated['tuto_id'])->first();

        return view('components.save_form', compact('is_favorite', 'tutorial'));
    }
}
