<?php

namespace App\Nova\Filters;

use App\Models\ProjectCategoryTranslation;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class ProjectCategory extends Filter
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
    public $name = 'Catégories';

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
        $projects = \App\Models\ProjectCategory::where('id', '=', $value)->first()->projects;

        $ids = [];
        foreach ($projects as $project) {
            $ids[] = $project->id;
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
        $categoriesRefs = ProjectCategoryTranslation::where('locale', 'fr')->select('name', 'category_id')->whereNotNull('name')->groupBy('name', 'category_id')->get();

        $categories = [];
        foreach ($categoriesRefs as $category) {
            $categories[$category->name] = $category->category_id;
        }

        return $categories;
    }
}
