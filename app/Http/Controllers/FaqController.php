<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\FaqCategoryTranslation;
use App\Models\FaqTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(string $locale, FaqCategoryTranslation $category)
    {
        $url = request()->url();

        $category = FaqCategory::find($category->category_id);

        $questions = $this->getQuestions($category, $locale);

        $categories = FaqCategory::all();

        $aside = AsideController::get();

        return view('faq.index', compact('url', 'questions', 'categories', 'aside'));
    }

    /**
     * @param $category
     * @param string $locale
     * @return array
     */
    public function getQuestions($category, string $locale)
    {
        $search_term = request()->input('search_term') ?? '';
        $questions = $category->questions;

        if ($search_term) {
            $questionsIds = [];
            foreach ($category->questions as $q) {
                $questionsIds[] = $q->id;
            }

            $ids = [];

            $refs = FaqTranslation::where('locale', $locale)
                ->whereIn('faq_id', $questionsIds)
                ->where(function ($query) use ($search_term) {
                    $query->where('title', 'like', '%' . $search_term . '%')
                        ->orWhere('body', 'like', '%' . $search_term . '%');
                })
                ->get();

            foreach ($refs as $ref) {
                $ids[] = $ref->faq_id;
            }

            if (count($ids) > 0) {
                $questions = Faq::whereIn('id', $ids)->get();
            } else {
                $questions = [];
            }
        }
        return $questions;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function ajax(string $locale, FaqCategoryTranslation $category)
    {
        $category = FaqCategory::find($category->category_id);

        $questions = $this->getQuestions($category, $locale);

        return view('components.faq.questions', compact('questions'));
    }
}
