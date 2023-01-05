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
        Schema::create('studenttranslations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('fullname');
            $table->string('slug');
            $table->string('email');
            $table->string('picture')->nullable();
            $table->json('pictures')->nullable();
            $table->string('gender')->nullable();
            $table->text('bio')->nullable();
            $table->string('role');
            $table->string('website_link')->nullable();
            $table->string('github_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->timestamp('start_year');
            $table->timestamp('end_year')->nullable();
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
        Schema::dropIfExists('studenttranslations');
    }
};
