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
        Schema::create('project_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->string('title');
            $table->string('slug');
            $table->string('picture');
            $table->text('body');
            $table->string('website_link')->nullable();
            $table->string('github_link')->nullable();
            $table->json('gallery')->nullable();
            $table->timestamp('published_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_translations');
    }
};
