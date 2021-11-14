<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcoversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecovers', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('thumbnail')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('dimension_id')->nullable();

            $table->string('status')->default('true');
            $table->softDeletes('deleted_at', 6)->nullable();
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
        Schema::dropIfExists('ecovers');
    }
}
