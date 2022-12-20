<?php

namespace App\Nova;

use Illuminate\Validation\Rules;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\User>
     */
    public static $model = \App\Models\User::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'fullname';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'fullname', 'email',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->hide(),

            Gravatar::make()->maxWidth(50),

            Text::make('Nom', 'fullname')
                ->sortable()
                ->hideFromDetail()
                ->rules('required', 'max:255'),

            Text::make('Prénom', 'firstname')
                ->onlyOnForms()
                ->sortable()
                ->rules('required', 'max:255'),

            Text::make('Nom de famille', 'lastname')
                ->onlyOnForms()
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Slug')
                ->from('fullname')
                ->sortable()
                ->rules('required', 'unique'),

            Email::make('Email')
                ->sortable()
                ->rules('required', 'unique', 'email', 'max:254')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Mot de passe', 'password')
                ->onlyOnForms()
                ->creationRules('required', Rules\Password::defaults())
                ->updateRules('nullable', Rules\Password::defaults()),

            Boolean::make('Admin', 'is_admin'),

            Trix::make('Bio')
                ->hideFromIndex(),

            Select::make('Genre')->options([
                'male' => 'Homme',
                'female' => 'Femme',
                'prefer-not-to-say' => 'Ne préfère pas le préciser'
            ])->displayUsingLabels()->hideFromIndex(),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
