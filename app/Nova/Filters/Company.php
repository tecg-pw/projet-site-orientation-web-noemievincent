<?php

namespace App\Nova\Filters;

use App\Models\CompanyTranslation;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Filters\Filter;
use Laravel\Nova\Http\Requests\NovaRequest;

class Company extends Filter
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
    public $name = 'Entreprise';

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
        return $query->where('company_id', $value);
    }

    /**
     * Get the filter's available options.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function options(NovaRequest $request)
    {
        $companiesRefs = CompanyTranslation::select('company_id', 'name')->whereNotNull('name')->groupBy('name', 'company_id')->get();

        $companies = [];
        foreach ($companiesRefs as $company) {
            $companies[$company->name] = $company->company_id;
        }

        return $companies;
    }
}
