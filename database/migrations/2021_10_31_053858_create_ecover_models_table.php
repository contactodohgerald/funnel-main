<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcoverModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecover_models', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('title')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('created_by')->nullable();
            $table->string('dimension_unique_id')->nullable();

            $table->softDeletes('deleted_at',6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecover_models');
    }
}
