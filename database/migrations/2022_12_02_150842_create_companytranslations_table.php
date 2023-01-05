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
        Schema::create('companytranslations', function (Blueprint $table) {
            $table->id();
            $table->string('locale');
            $table->string('name');
            $table->string('slug');
            $table->string('logo')->nullable();
            $table->json('logos')->nullable();
            $table->json('srcset')->nullable();
            $table->string('streetAddress')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('addressLocality')->nullable();
            $table->text('description')->nullable();
            $table->string('website_link')->nullable();
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
        Schema::dropIfExists('companytranslations');
    }
};
