<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbookHeaderOrFooterSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebook_header_or_footer_settings', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('ebook_id');
            $table->string('type')->nullable(); //header settings, pg goes to footer, and vise versa
            $table->text('text')->nullable();
            $table->string('link')->nullable();
            $table->string('align')->nullable();
            $table->string('color')->nullable();
            $table->string('text_size')->nullable();
            $table->string('font_family')->nullable();

            $table->string('status')->default('false');
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
        Schema::dropIfExists('ebook_header_or_footer_settings');
    }
}
