<?php

namespace App\Nova\Filters;

use App\Models\Language;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class Languages extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * The column that should be filtered on.
     *
     * @var string
     */
    protected $resource;

    /**
     * Create a new filter instance.
     *
     * @param string
     * @return void
     */
    public function __construct($resource)
    {
        $this->resource = $resource;
    }

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
        $ids = [];
        if ($this->resource === 'tutorials') {
            $tutorials = Language::where('id', '=', $value)->first()->tutorials;

            foreach ($tutorials as $tutorial) {
                $ids[] = $tutorial->id;
            }
        }

        if ($this->resource === 'documentations') {
            $documentations = Language::where('id', '=', $value)->first()->documentations;

            foreach ($documentations as $documentation) {
                $ids[] = $documentation->id;
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
        $languagesRef = Language::select('name', 'id')->get();

        $languages = [];
        foreach ($languagesRef as $language) {
            $languages[$language->name] = $language->id;
        }

        return $languages;
    }
}
