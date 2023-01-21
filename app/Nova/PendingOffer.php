<?php

namespace App\Nova;

use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Murdercode\TinymceEditor\TinymceEditor;

class PendingOffer extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\PendingOffer>
     */
    public static $model = \App\Models\PendingOffer::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'company_name', 'contact_name', 'contact_email', 'title'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->hide(),

            Image::make('Logo de l’entreprise', 'company_logo')
                ->onlyOnDetail(),

            Text::make('Nom de l’entreprise', 'company_name')
                ->sortable(),

            URL::make('Site web', 'website')
                ->displayUsing(fn() => $this->website)
                ->onlyOnDetail(),

            Text::make('Titre', 'title')
                ->sortable(),

            TinymceEditor::make('Description', 'description'),


            Heading::make('Compétences'),
            Text::make('Compétences', function () {
                return $this->displaySkills('skills');
            })->onlyOnDetail(),

            Text::make('Compétences ajoutées', function () {
                return $this->displaySkills('add_skill');
            })->onlyOnDetail(),


            Heading::make('Informations de contact'),
            Text::make('Personne de contact', 'contact_name')
                ->sortable(),

            Email::make('Email de contact', 'contact_email')
                ->onlyOnDetail(),


            Heading::make('Convention de stage'),
            Date::make('Date de début', 'start_date')
                ->onlyOnDetail(),

            Text::make('Durée', 'duration')
                ->onlyOnDetail(),

            Text::make('Lieu', 'location')
                ->onlyOnDetail(),


            Heading::make('Mode de réception'),
            Select::make('Méthode', 'reception_mode')->options([
                'email' => 'Par email',
                'url' => 'Redirection sur une page du site'
            ])->displayUsingLabels()->onlyOnDetail(),

            Text::make('Lien ou email', 'applications_link')
                ->onlyOnDetail(),
        ];
    }

    public function displaySkills($column)
    {
        $skills = json_decode(\App\Models\PendingOffer::first()->$column);
        $skills = implode(', ', $skills);

        return $skills;
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
