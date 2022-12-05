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
        Schema::create('coursetranslations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->string('name');
            $table->string('slug');
            $table->text('description');
            $table->text('orientation');
            $table->string('year');
            $table->string('period')->nullable();
            $table->integer('hours');
            $table->integer('ects')->nullable();
            $table->string('ects_link')->nullable();
            $table->string('github_link')->nullable();
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
        Schema::dropIfExists('coursetranslations');
    }
};
