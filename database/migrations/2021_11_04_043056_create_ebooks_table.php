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

            $table->string('type')->nullable(); //Article, dfy etc

            $table->string('ebook_author')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('body_font_family')->nullable();
            $table->string('body_font_size')->nullable();
            $table->string('dark_mode')->default('false');

            $table->string('page_numbering')->nullable(); //in_header or in_footer
            $table->string('numbering_format')->nullable();

            $table->string('header_text')->nullable();
            $table->string('header_text_link')->nullable();
            $table->string('header_text_align')->nullable();
            $table->string('header_text_color')->nullable();
            $table->string('header_font_size')->nullable();
            $table->string('header_font_family')->nullable();

            $table->string('footer_text')->nullable();
            $table->string('footer_text_link')->nullable();
            $table->string('footer_text_align')->nullable();
            $table->string('footer_text_color')->nullable();
            $table->string('footer_font_size')->nullable();
            $table->string('footer_font_family')->nullable();

            $table->string('title_text_align')->nullable();
            $table->string('title_text_color')->nullable();
            $table->string('title_font_size')->nullable();

            $table->string('subheader_text')->nullable();
            $table->string('subheader_text_link')->nullable();
            $table->string('subheader_text_align')->nullable();
            $table->string('subheader_text_color')->nullable();
            $table->string('subheader_font_size')->nullable();
            $table->string('subheader_font_family')->nullable();

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
