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
        Schema::create('articletranslations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->string('title');
            $table->string('slug');
            $table->string('picture')->nullable();
            $table->json('pictures')->nullable();
            $table->text('excerpt');
            $table->text('body');
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
        Schema::dropIfExists('articletranslations');
    }
};
