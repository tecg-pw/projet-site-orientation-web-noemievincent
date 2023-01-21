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
    public function index()
    {
        $url = request()->url();

        $tutorials = Tutorial::paginate(9);
        $languages = Language::all();

        $aside = AsideController::get();

        return view('tutorials.index', compact('url', 'tutorials', 'languages', 'aside'));
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
