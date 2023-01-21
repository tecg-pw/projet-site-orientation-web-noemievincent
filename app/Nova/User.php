<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Password;
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

                    $srcset_full_640_path = 'img/people/users/srcset/' . 'full-640-' .  $name . '.' . $ext;
                    $srcset_full_768_path = 'img/people/users/srcset/' . 'full-768-' .  $name . '.' . $ext;
                    $srcset_full_1024_path = 'img/people/users/srcset/' . 'full-1024-' .  $name . '.' . $ext;
                    $srcset_full_1520_path = 'img/people/users/srcset/' . 'full-1520-' .  $name . '.' . $ext;
                    $srcset_full_2560_path = 'img/people/users/srcset/' . 'full-2560-' .  $name . '.' . $ext;

                    Image::make($full)->fit((int) ($full->width() / 1.02), (int) ($full->width() / 1.02), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_full_640_path);
                    Image::make($full)->fit((int) ($full->width() / 1.8), (int) ($full->width() / 1.8), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_full_768_path);
                    Image::make($full)->fit((int) ($full->width() / 2), (int) ($full->width() / 2), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_full_1024_path);
                    Image::make($full)->fit((int) ($full->width() / 1.4), (int) ($full->width() / 1.4), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_full_1520_path);
                    Image::make($full)->fit((int) ($full->width()), (int) ($full->width()), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_full_2560_path);

                    $medium_path = 'img/people/users/' . 'medium-' .  $name . '.' . $ext;
                    $medium = Image::make($request->picture)->fit(60, 60, function ($constraint) {
                        $constraint->upsize();
                    })->save($medium_path);

                    $srcset_medium_640_path = 'img/people/users/srcset/' . 'medium-640-' .  $name . '.' . $ext;
                    $srcset_medium_768_path = 'img/people/users/srcset/' . 'medium-768-' .  $name . '.' . $ext;
                    $srcset_medium_1024_path = 'img/people/users/srcset/' . 'medium-1024-' .  $name . '.' . $ext;
                    $srcset_medium_1520_path = 'img/people/users/srcset/' . 'medium-1520-' .  $name . '.' . $ext;
                    $srcset_medium_2560_path = 'img/people/users/srcset/' . 'medium-2560-' .  $name . '.' . $ext;

                    Image::make($medium)->fit((int) ($medium->width() / 1.02), (int) ($medium->width() / 1.02), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_medium_640_path);
                    Image::make($medium)->fit((int) ($medium->width() / 1.8), (int) ($medium->width() / 1.8), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_medium_768_path);
                    Image::make($medium)->fit((int) ($medium->width() / 2), (int) ($medium->width() / 2), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_medium_1024_path);
                    Image::make($medium)->fit((int) ($medium->width() / 1.4), (int) ($medium->width() / 1.4), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_medium_1520_path);
                    Image::make($medium)->fit((int) ($medium->width()), (int) ($medium->width()), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_medium_2560_path);

                    $small_path = 'img/people/users/' . 'small-' .  $name . '.' . $ext;
                    $small = Image::make($request->picture)->fit(30, 30, function ($constraint) {
                        $constraint->upsize();
                    })->save($small_path);

                    $srcset_small_640_path = 'img/people/users/srcset/' . 'small-640-' .  $name . '.' . $ext;
                    $srcset_small_768_path = 'img/people/users/srcset/' . 'small-768-' .  $name . '.' . $ext;
                    $srcset_small_1024_path = 'img/people/users/srcset/' . 'small-1024-' .  $name . '.' . $ext;
                    $srcset_small_1520_path = 'img/people/users/srcset/' . 'small-1520-' .  $name . '.' . $ext;
                    $srcset_small_2560_path = 'img/people/users/srcset/' . 'small-2560-' .  $name . '.' . $ext;

                    Image::make($small)->fit((int) ($small->width() / 1.02), (int) ($small->width() / 1.02), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_small_640_path);
                    Image::make($small)->fit((int) ($small->width() / 1.8), (int) ($small->width() / 1.8), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_small_768_path);
                    Image::make($small)->fit((int) ($small->width() / 2), (int) ($small->width() / 2), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_small_1024_path);
                    Image::make($small)->fit((int) ($small->width() / 1.4), (int) ($small->width() / 1.4), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_small_1520_path);
                    Image::make($small)->fit((int) ($small->width()), (int) ($small->width()), function ($constraint) {
                        $constraint->upsize();
                    })->save($srcset_small_2560_path);

                    return [
                        'picture' => $full_path,
                        'pictures' => [
                            'full' => $full_path,
                            'medium' => $medium_path,
                            'small' => $small_path,
                        ],
                        'srcset' => [
                            'full' => [
                                '640' => $srcset_full_640_path,
                                '768' => $srcset_full_768_path,
                                '1024' => $srcset_full_1024_path,
                                '1520' => $srcset_full_1520_path,
                                '2560' => $srcset_full_2560_path,
                            ],
                            'medium' => [
                                '640' => $srcset_medium_640_path,
                                '768' => $srcset_medium_768_path,
                                '1024' => $srcset_medium_1024_path,
                                '1520' => $srcset_medium_1520_path,
                                '2560' => $srcset_medium_2560_path,
                            ],
                            'small' => [
                                '640' => $srcset_small_640_path,
                                '768' => $srcset_small_768_path,
                                '1024' => $srcset_small_1024_path,
                                '1520' => $srcset_small_1520_path,
                                '2560' => $srcset_small_2560_path,
                            ],
                        ],
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
                ->sortable(),

            Password::make('Mot de passe', 'password')
                ->onlyOnForms(),

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
