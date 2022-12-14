<?php

namespace App\Nova\Filters;

use App\Models\StudentTranslation;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class Student extends Filter
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
    public $name = 'Étudiant';

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
        return $query->where('student_id', $value);
    }

    /**
     * Get the filter's available options.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $studentsRefs = StudentTranslation::where('locale', app()->getLocale())->select('student_id', 'fullname')->get();

        $students = [];
        foreach ($studentsRefs as $student) {
            $students[$student->fullname] = $student->student_id;
        }

        return $students;
    }
}
