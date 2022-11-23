<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('students', static function (Blueprint $table) {
            $table->foreignId('opportunity_id')->nullable()->constrained()->onUpdate('cascade');
            $table->foreignId('company_id')->nullable()->constrained()->onUpdate('cascade');
            $table->foreignId('internship_id')->nullable()->constrained('companies')->onUpdate('cascade');
        });

        Schema::table('projects', static function (Blueprint $table) {
            $table->foreignId('student_id')->constrained()->onUpdate('cascade');
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('articles', static function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('article_categories')->onUpdate('cascade');
            $table->foreignId('author_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('offers', static function (Blueprint $table) {
            $table->foreignId('company_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('questions', static function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('question_categories')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('replies', static function (Blueprint $table) {
            $table->foreignId('question_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('company_members', static function (Blueprint $table) {
            $table->foreignId('company_id')->constrained()->onUpdate('cascade');
        });


        Schema::table('category_project', static function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('project_categories')->onUpdate('cascade');
            $table->foreignId('project_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('course_teacher', static function (Blueprint $table) {
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
            $table->foreignId('teacher_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('offer_skill', static function (Blueprint $table) {
            $table->foreignId('offer_id')->constrained()->onUpdate('cascade');
            $table->foreignId('skill_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('tutorial_user', static function (Blueprint $table) {
            $table->foreignId('tutorial_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('language_tutorial', static function (Blueprint $table) {
            $table->foreignId('language_id')->constrained()->onUpdate('cascade');
            $table->foreignId('tutorial_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('documentation_language', static function (Blueprint $table) {
            $table->foreignId('documentation_id')->constrained()->onUpdate('cascade');
            $table->foreignId('language_id')->constrained()->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
