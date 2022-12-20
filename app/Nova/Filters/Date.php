<?php

namespace App\Nova\Filters;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class Date extends Filter
{
    /**
     * The filter's component.
     *
     * @var string
     */
    public $component = 'select-filter';

    /**
     * The displayable name of the filter.
     *
     * @var string
     */
    public $name = 'Date de publication';

    /**
     * The column that should be filtered on.
     *
     * @var Model
     */
    protected $model;

    /**
     * The column that should be filtered on.
     *
     * @var Model
     */
    protected $translatedModel;

    /**
     * The column that should be filtered on.
     *
     * @var string
     */
    protected $column;

    /**
     * Create a new filter instance.
     *
     * @param Model
     * @return void
     */
    public function __construct($model, $translatedModel, $column)
    {
        $this->model = $model;
        $this->translatedModel = $translatedModel;
        $this->column = $column;
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
        $ressources = $this->model::all();

        $ids = [];

        foreach ($ressources as $ressource) {
            if ($ressource->translations->where('locale', app()->getLocale())->first()->published_at == Carbon::parse($value)) {
                $ids[] = $ressource->id;
            }
        }

        return $query->whereIn($this->column, $ids);
    }

    /**
     * Get the filter's available options.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $dateRefs = $this->translatedModel::where('locale', app()->getLocale())->select('published_at')->get();

        $dates = [];
        foreach ($dateRefs as $date) {
            $dates[ucfirst($date->published_at->translatedFormat('F Y'))] = strval($date->published_at);
        }

        return $dates;
    }
}
