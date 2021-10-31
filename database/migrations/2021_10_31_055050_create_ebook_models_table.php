<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebook_models', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('type')->nullable();
            $table->string('author_name')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('body_font_family')->nullable();
            $table->string('body_font_size')->nullable();
            $table->string('dark_mode')->default('no');
            $table->string('page_numbering')->nullable();
            $table->string('numbering_format')->nullable();
            $table->longText('description')->nullable();
            $table->longText('summary')->nullable();

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
        Schema::dropIfExists('ebook_models');
    }
}
