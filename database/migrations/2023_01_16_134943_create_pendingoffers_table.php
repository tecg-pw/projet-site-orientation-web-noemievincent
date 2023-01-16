<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendingoffers', function (Blueprint $table) {
            $table->id();
            $table->string('company_logo');
            $table->string('company_name');
            $table->string('website');
            $table->string('contact_name');
            $table->string('contact_email');
            $table->string('title');
            $table->text('description');
            $table->json('skills');
            $table->json('add_skill')->nullable();
            $table->timestamp('start_date');
            $table->string('duration');
            $table->string('location');
            $table->string('reception_mode');
            $table->string('applications_link');
            $table->timestamp('published_at')->useCurrent();
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
        Schema::dropIfExists('pendingoffers');
    }
};
