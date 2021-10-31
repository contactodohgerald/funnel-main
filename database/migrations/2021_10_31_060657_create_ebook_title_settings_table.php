<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEbookTitleSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ebook_title_settings', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->string('ebook_unique_id');
            $table->string('align')->nullable();
            $table->text('color')->nullable();
            $table->string('text_size')->nullable();

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
        Schema::dropIfExists('ebook_title_settings');
    }
}
