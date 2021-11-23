<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbookArticleAttributesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebook_article_attributes', function (Blueprint $table) {
            $table->id();

            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->string('article_title');
            $table->longText('article_description');

            $table->unsignedBigInteger('ebook_id');

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
        Schema::dropIfExists('ebook_article_attributes');
    }
}
