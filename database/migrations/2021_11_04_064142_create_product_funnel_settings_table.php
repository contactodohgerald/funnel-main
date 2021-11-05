<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductFunnelSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_funnel_settings', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->string('buy_button_code')->nullable(); //SalesPageSetting
            $table->string('upsell_header_code')->nullable();
            $table->string('no_thanks_link_code')->nullable();
            $table->string('autoresponder_form_code')->nullable(); //SqueezeThankYouPageSetting
            $table->string('download_product_link_text')->nullable(); //DownloadPageSettings
            $table->string('download_license_link_text')->nullable();
            $table->string('countdown_timer_code')->nullable();

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
        Schema::dropIfExists('product_funnel_settings');
    }
}
