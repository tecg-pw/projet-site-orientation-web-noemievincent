<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\StudentTranslation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AlumnisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(string $locale)
    {
        $url = request()->url();

        $alumnis = $this->getStudents($locale);

        $start_dates = StudentTranslation::select('start_year')->groupBy('start_year')->get();
        $end_dates = StudentTranslation::select('end_year')->whereNotNull('end_year')->groupBy('end_year')->get();

        $aside = AsideController::get();

        return view('alumnis.index', compact('url', 'alumnis', 'start_dates', 'end_dates', 'aside'));
    }
    public function getStudents(string $locale)
    {
        $alumnis = [];
        $search_term = request()->input('search_term') ?? '';
        $sort_by_start_year = request()->input('start_year') ?? 'all';
        $sort_by_end_year = request()->input('end_year') ?? 'all';

        if ($search_term) {
            $ids = [];

            $refs = StudentTranslation::where('locale', $locale)
                ->where('fullname', 'like', '%' . $search_term . '%')
                ->get();

            foreach ($refs as $ref) {
                $ids[] = $ref->student_id;
            }

            if (count($ids) > 0) {
                $alumnis = Student::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_start_year === 'all' && $sort_by_end_year === 'all') {
            $alumnis = Student::paginate()->withQueryString();
        } elseif ($sort_by_end_year === 'all') {
            $refs = StudentTranslation::where('locale', $locale)
                ->whereDate('start_year', 'like', '%' . $sort_by_start_year . '%')
                ->get();

            $ids = [];
            foreach ($refs as $ref) {
                $ids[] = $ref->student_id;
            }

            if (count($ids) > 0) {
                $alumnis = Student::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_start_year === 'all' && $sort_by_end_year === 'now') {
            $refs = StudentTranslation::where('locale', $locale)
                ->whereNull('end_year')
                ->get();

            $ids = [];
            foreach ($refs as $ref) {
                $ids[] = $ref->student_id;
            }

            if (count($ids) > 0) {
                $alumnis = Student::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_start_year === 'all') {
            $refs = StudentTranslation::where('locale', $locale)
                ->whereDate('end_year', 'like', '%' . $sort_by_end_year . '%')
                ->get();

            $ids = [];
            foreach ($refs as $ref) {
                $ids[] = $ref->student_id;
            }

            if (count($ids) > 0) {
                $alumnis = Student::whereIn('id', $ids)->paginate()->withQueryString();
            }
        } elseif ($sort_by_start_year && $sort_by_end_year === 'now') {
            $start_dates_refs = StudentTranslation::where('locale', $locale)
                ->whereDate('start_year', 'like', '%' . $sort_by_start_year . '%')
                ->get();

            $start_year_ids = [];
            foreach ($start_dates_refs as $ref) {
                $start_year_ids[] = $ref->student_id;
            }

            $end_dates_refs = StudentTranslation::where('locale', $locale)
                ->whereIn('student_id', $start_year_ids)
                ->whereNull('end_year')
                ->get();

            $ids = [];
            foreach ($end_dates_refs as $ref) {
                $ids[] = $ref->student_id;
            }

            if (count($ids) > 0) {
                $alumnis = Student::whereIn('id', $ids)->paginate()->withQueryString();
            }
        }  elseif ($sort_by_start_year && $sort_by_end_year) {
            $start_dates_refs = StudentTranslation::where('locale', $locale)
                ->whereDate('start_year', 'like', '%' . $sort_by_start_year . '%')
                ->get();

            $start_year_ids = [];
            foreach ($start_dates_refs as $ref) {
                $start_year_ids[] = $ref->student_id;
            }

            $end_dates_refs = StudentTranslation::where('locale', $locale)
                ->whereIn('student_id', $start_year_ids)
                ->whereDate('end_year', 'like', '%' . $sort_by_end_year . '%')
                ->get();

            $ids = [];
            foreach ($end_dates_refs as $ref) {
                $ids[] = $ref->student_id;
            }

            if (count($ids) > 0) {
                $alumnis = Student::whereIn('id', $ids)->paginate()->withQueryString();
            }
        }

        return $alumnis;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function ajax(string $locale)
    {
        $alumnis = $this->getStudents($locale);

        return view('components.alumnis.paginated_alumnis', compact('alumnis'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function show(string $locale, StudentTranslation $alumni)
    {
        $alumniRef = Student::find($alumni->student_id);
        $alumni = $alumniRef->translations->where('locale', $locale)->first();

        $internship = $alumniRef->internship;
        $opportunity = $alumniRef->opportunity;
        $company = $alumniRef->company;

        $projects = $alumniRef->projects;

        $aside = AsideController::get();

        return view('alumnis.show', compact('alumni', 'internship', 'opportunity', 'company', 'projects', 'aside'));
    }
}
