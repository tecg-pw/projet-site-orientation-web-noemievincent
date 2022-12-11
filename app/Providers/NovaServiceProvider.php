<?php

namespace App\Providers;

use App\Nova\Course;
use App\Nova\CourseTranslation;
use App\Nova\Dashboards\Main;
use App\Nova\Documentation;
use App\Nova\DocumentationTranslation;
use App\Nova\Language;
use App\Nova\Project;
use App\Nova\ProjectTranslation;
use App\Nova\Student;
use App\Nova\StudentTranslation;
use App\Nova\Tutorial;
use App\Nova\TutorialTranslation;
use App\Nova\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                MenuSection::make('Resources', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Language::class),
                    MenuItem::resource(Student::class),
                    MenuItem::resource(Project::class),
                    MenuItem::resource(Course::class),
                    MenuItem::resource(Tutorial::class),
                    MenuItem::resource(Documentation::class),
                ])->collapsable(),

                MenuSection::make('Translations', [
                    MenuItem::resource(StudentTranslation::class),
                    MenuItem::resource(ProjectTranslation::class),
                    MenuItem::resource(CourseTranslation::class),
                    MenuItem::resource(TutorialTranslation::class),
                    MenuItem::resource(DocumentationTranslation::class),
                ])->icon('translate')->collapsable(),
            ];
        });
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new Main,
        ];
    }
}
