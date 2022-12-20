<?php

namespace App\Nova\Filters;

use App\Models\CourseTranslation;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class CourseYear extends Filter
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
    public $name = 'Année du cours';

    /**
     * The column that should be filtered on.
     *
     * @var string
     */
    protected $column;

    /**
     * Create a new filter instance.
     *
     * @param string $column
     * @return void
     */
    public function __construct($column)
    {
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
        $courses = CourseTranslation::where('year', $value)->get();

        $ids = [];
        foreach ($courses as $course) {
            $ids[] = $course->course_id;
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
        $years = [];
        foreach (__('classes.years') as $key => $year) {
            $years[$year] = $key;
        }

        return $years;
    }
}
