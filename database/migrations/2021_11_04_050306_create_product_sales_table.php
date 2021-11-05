<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_sales', function (Blueprint $table) {
            $table->id();
            $table->string('unique_id')->unique();
            $table->unsignedBigInteger('created_by')->nullable();

            $table->unsignedBigInteger('product_id')->nullable();
            $table->string('type')->nullable(); //sales_page_content, download_page_content, thank_you_page_content, exit_pop_up_sales_pages_content, exit_pop_up_download_pages_content
            $table->string('type_content')->nullable(); //file //content of selected type above.

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
        Schema::dropIfExists('product_sales');
    }
}
