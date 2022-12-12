<?php

namespace App\Providers;

use App\Nova\Article;
use App\Nova\ArticleCategory;
use App\Nova\ArticleCategoryTranslation;
use App\Nova\ArticleTranslation;
use App\Nova\Author;
use App\Nova\Company;
use App\Nova\CompanyMember;
use App\Nova\CompanyTranslation;
use App\Nova\Course;
use App\Nova\CourseTranslation;
use App\Nova\Dashboards\Main;
use App\Nova\Documentation;
use App\Nova\DocumentationTranslation;
use App\Nova\Faq;
use App\Nova\FaqCategory;
use App\Nova\FaqCategoryTranslation;
use App\Nova\FaqTranslation;
use App\Nova\Language;
use App\Nova\Offer;
use App\Nova\OfferTranslation;
use App\Nova\Opportunity;
use App\Nova\OpportunityTranslation;
use App\Nova\Project;
use App\Nova\ProjectCategory;
use App\Nova\ProjectCategoryTranslation;
use App\Nova\ProjectTranslation;
use App\Nova\Question;
use App\Nova\QuestionCategory;
use App\Nova\QuestionCategoryTranslation;
use App\Nova\Reply;
use App\Nova\Skill;
use App\Nova\Student;
use App\Nova\StudentTranslation;
use App\Nova\Teacher;
use App\Nova\TeacherTranslation;
use App\Nova\Tool;
use App\Nova\ToolTranslation;
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

                MenuSection::make('Main Resources', [
                    MenuItem::resource(Article::class),
                    MenuItem::resource(Author::class),
                    MenuItem::resource(Company::class),
                    MenuItem::resource(Course::class),
                    MenuItem::resource(Documentation::class),
                    MenuItem::resource(Faq::class),
                    MenuItem::resource(Offer::class),
                    MenuItem::resource(Opportunity::class),
                    MenuItem::resource(Project::class),
                    MenuItem::resource(Question::class),
                    MenuItem::resource(Reply::class),
                    MenuItem::resource(Student::class),
                    MenuItem::resource(Teacher::class),
                    MenuItem::resource(Tool::class),
                    MenuItem::resource(Tutorial::class),
                    MenuItem::resource(User::class),
                ])->collapsable(),

                MenuSection::make('Sub Resources', [
                    MenuItem::resource(ArticleCategory::class),
                    MenuItem::resource(CompanyMember::class),
                    MenuItem::resource(FaqCategory::class),
                    MenuItem::resource(Language::class),
                    MenuItem::resource(ProjectCategory::class),
                    MenuItem::resource(QuestionCategory::class),
                    MenuItem::resource(Skill::class),
                ])->icon('document-text')->collapsable(),

                MenuSection::make('Translations', [
                    MenuItem::resource(ArticleTranslation::class),
                    MenuItem::resource(ArticleCategoryTranslation::class),
                    MenuItem::resource(CompanyTranslation::class),
                    MenuItem::resource(CourseTranslation::class),
                    MenuItem::resource(DocumentationTranslation::class),
                    MenuItem::resource(FaqTranslation::class),
                    MenuItem::resource(FaqCategoryTranslation::class),
                    MenuItem::resource(OfferTranslation::class),
                    MenuItem::resource(OpportunityTranslation::class),
                    MenuItem::resource(ProjectTranslation::class),
                    MenuItem::resource(ProjectCategoryTranslation::class),
                    MenuItem::resource(QuestionCategoryTranslation::class),
                    MenuItem::resource(StudentTranslation::class),
                    MenuItem::resource(TeacherTranslation::class),
                    MenuItem::resource(ToolTranslation::class),
                    MenuItem::resource(TutorialTranslation::class),
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
            return $this->isAdmin($user);
        });
    }

    public function isAdmin(\App\Models\User $user)
    {
        return $user->is_admin;
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
