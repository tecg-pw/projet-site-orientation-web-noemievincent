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
        Schema::table('student_translations', static function (Blueprint $table) {
            $table->foreignId('student_id')->constrained()->onUpdate('cascade');
            $table->foreignId('opportunity_id')->nullable()->constrained()->onUpdate('cascade');
            $table->foreignId('company_id')->nullable()->constrained()->onUpdate('cascade');
            $table->foreignId('internship_id')->nullable()->constrained('companies')->onUpdate('cascade');
        });

        Schema::table('project_translations', static function (Blueprint $table) {
            $table->foreignId('project_id')->constrained()->onUpdate('cascade');
            $table->foreignId('student_id')->constrained()->onUpdate('cascade');
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('project_categories_translations', static function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('project_categories')->onUpdate('cascade');
        });

        Schema::table('course_translations', static function (Blueprint $table) {
            $table->foreignId('course_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('opportunity_translations', static function (Blueprint $table) {
            $table->foreignId('opportunity_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('teacher_translations', static function (Blueprint $table) {
            $table->foreignId('teacher_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('article_translations', static function (Blueprint $table) {
            $table->foreignId('article_id')->constrained()->onUpdate('cascade');
            $table->foreignId('category_id')->constrained('article_categories')->onUpdate('cascade');
            $table->foreignId('author_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('article_categories_translations', static function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('article_categories')->onUpdate('cascade');
        });

        Schema::table('offer_translations', static function (Blueprint $table) {
            $table->foreignId('offer_id')->constrained()->onUpdate('cascade');
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

        Schema::table('question_categories_translations', static function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('question_categories')->onUpdate('cascade');
        });

        Schema::table('faq_translations', static function (Blueprint $table) {
            $table->foreignId('faq_id')->constrained('faq')->onUpdate('cascade');
        });

        Schema::table('company_translations', static function (Blueprint $table) {
            $table->foreignId('company_id')->constrained()->onUpdate('cascade');
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

        Schema::table('tutorial_translations', static function (Blueprint $table) {
            $table->foreignId('tutorial_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('tutorial_user', static function (Blueprint $table) {
            $table->foreignId('tutorial_id')->constrained()->onUpdate('cascade');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('language_tutorial', static function (Blueprint $table) {
            $table->foreignId('language_id')->constrained()->onUpdate('cascade');
            $table->foreignId('tutorial_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('tool_translations', static function (Blueprint $table) {
            $table->foreignId('tool_id')->constrained()->onUpdate('cascade');
        });

        Schema::table('documentation_translations', static function (Blueprint $table) {
            $table->foreignId('documentation_id')->constrained()->onUpdate('cascade');
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
