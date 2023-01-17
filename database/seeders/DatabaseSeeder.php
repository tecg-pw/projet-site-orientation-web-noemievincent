<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->call(OpportunitiesSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(CourseTeacherSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(ArticleCategoriesSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(CompanyMembersSeeder::class);
        $this->call(OffersSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(ProjectCategoriesSeeder::class);
        $this->call(CategoryProjectSeeder::class);
        $this->call(QuestionCategoriesSeeder::class);
        $this->call(QuestionsSeeder::class);
        $this->call(RepliesSeeder::class);
        $this->call(FaqCategoriesSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(TutorialsSeeder::class);
        $this->call(DocumentationsSeeder::class);
        $this->call(ToolsSeeder::class);
        $this->call(TutorialUserSeeder::class);
        $this->call(LanguageTutorialSeeder::class);
        $this->call(DocumentationLanguageSeeder::class);
    }
}
