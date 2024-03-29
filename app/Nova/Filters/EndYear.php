<?php

namespace App\Nova\Filters;

use App\Models\StudentTranslation;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class EndYear extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * Apply the filter to the given query.
     *
     * @param NovaRequest $request
     * @param Builder $query
     * @param mixed $value
     * @return Builder
     */
    public function apply(NovaRequest $request, $query, $value)
    {
        $ressources = \App\Models\Student::all();

        $ids = [];
        foreach ($ressources as $ressource) {
            if ($ressource->translations->where('locale', app()->getLocale())->first()->end_year == Carbon::parse($value)) {
                $ids[] = $ressource->id;
            }
        }

        return $query->whereIn('id', $ids);
    }

    /**
     * Get the filter's available options.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $dateRefs = StudentTranslation::where('locale', app()->getLocale())->whereNotNull('end_year')->select('end_year')->get();

        $dates = [];
        foreach ($dateRefs as $date) {
            $dates[ucfirst($date->end_year->translatedFormat('F Y'))] = strval($date->end_year);
        }

        return $dates;
    }
}
