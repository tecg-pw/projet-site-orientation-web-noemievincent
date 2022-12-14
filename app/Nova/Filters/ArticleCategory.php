<?php

namespace App\Nova\Filters;

use App\Models\ArticleCategoryTranslation;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class ArticleCategory extends Filter
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
        return $query->where('category_id', $value);
    }

    /**
     * Get the filter's available options.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $categoriesRefs = ArticleCategoryTranslation::select('name', 'category_id')->whereNotNull('name')->groupBy('name', 'category_id')->get();

        $categories = [];
        foreach ($categoriesRefs as $category) {
            $categories[$category->name] = $category->category_id;
        }

        return $categories;
    }
}
