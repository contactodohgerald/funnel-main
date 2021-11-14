<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebooks', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->string('title')->nullable();
            $table->string('slug')->nullable();

            $table->string('type')->nullable();
            $table->string('author_name')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('body_font_family')->nullable();
            $table->string('body_font_size')->nullable();
            $table->string('dark_mode')->default('false');
            $table->string('page_numbering')->nullable(); //total number of numbering
            $table->string('numbering_format')->nullable();
            $table->longText('description')->nullable();
            $table->longText('summary')->nullable();

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
        Schema::dropIfExists('ebooks');
    }
}
