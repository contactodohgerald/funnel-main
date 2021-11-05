<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbookSubHeadingSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebook_sub_heading_settings', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('ebook_id');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->text('text')->nullable();
            $table->string('link')->nullable();
            $table->string('align')->nullable();
            $table->string('color')->nullable();
            $table->string('text_size')->nullable();
            $table->string('font_family')->nullable();

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
        Schema::dropIfExists('ebook_sub_heading_settings');
    }
}
