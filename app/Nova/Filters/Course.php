<?php

namespace App\Nova\Filters;

use App\Models\CourseTranslation;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class Course extends Filter
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
    public $name = 'Cours';

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
        return $query->where('course_id', $value);
    }

    /**
     * Get the filter's available options.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $coursesRefs = CourseTranslation::where('locale', app()->getLocale())->where('orientation', 'web')->select('course_id', 'name')->get();

        $courses = [];
        foreach ($coursesRefs as $course) {
            $courses[$course->name] = $course->course_id;
        }

        return $courses;
    }
}
