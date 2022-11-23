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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(OpportunitiesSeeder::class);
        $this->call(TeachersSeeder::class);
        $this->call(CoursesSeeder::class);
        $this->call(CourseTeacherSeeder::class);
        $this->call(StudentsSeeder::class);
        $this->call(ProjectsSeeder::class);
        $this->call(ProjectCategoriesSeeder::class);
        $this->call(CategoryProjectSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(ArticleCategoriesSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(CompaniesSeeder::class);
        $this->call(CompanyMembersSeeder::class);
        $this->call(OffersSeeder::class);
        $this->call(SkillsSeeder::class);
        $this->call(OfferSkillSeeder::class);
        $this->call(FaqSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(TutorialsSeeder::class);
        $this->call(DocumentationsSeeder::class);
        $this->call(ToolsSeeder::class);
        $this->call(LanguageTutorialSeeder::class);
        $this->call(DocumentationLanguageSeeder::class);
    }
}
