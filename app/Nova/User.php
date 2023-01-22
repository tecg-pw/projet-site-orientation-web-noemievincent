<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Murdercode\TinymceEditor\TinymceEditor;

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

            Avatar::make('Photo', 'picture')
                ->store(function (Request $request, $model) {
                    $ext = $request->picture->getClientOriginalExtension();
                    $name =  sha1_file($request->picture);

                    $full_path = 'img/people/users/' . 'full-' .  $name . '.' . $ext;
                    $full = Image::make($request->picture)->fit(160, 160, function ($constraint) {
                        $constraint->upsize();
                    })->save($full_path);

                    $medium_path = 'img/people/users/' . 'medium-' .  $name . '.' . $ext;
                    $medium = Image::make($request->picture)->fit(60, 60, function ($constraint) {
                        $constraint->upsize();
                    })->save($medium_path);

                    $small_path = 'img/people/users/' . 'small-' .  $name . '.' . $ext;
                    $small = Image::make($request->picture)->fit(30, 30, function ($constraint) {
                        $constraint->upsize();
                    })->save($small_path);

                    return [
                        'picture' => $full_path,
                        'pictures' => [
                            'full' => $full_path,
                            'medium' => $medium_path,
                            'small' => $small_path,
                        ]
                    ];
                }),

            Text::make('Nom', 'fullname')
                ->sortable()
                ->hideFromDetail(),

            Text::make('Prénom', 'firstname')
                ->onlyOnForms()
                ->sortable(),

            Text::make('Nom de famille', 'lastname')
                ->onlyOnForms()
                ->sortable(),

            Slug::make('Slug')
                ->from('fullname')
                ->sortable(),

            Email::make('Email')
                ->sortable()
                ->onlyOnDetail(),

            Boolean::make('Admin', 'is_admin'),

            TinymceEditor::make('Description', 'bio'),

            Select::make('Genre', 'gender')->options([
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
