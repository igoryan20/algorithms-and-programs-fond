<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductsPhotosPathsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products_photos_paths', function (Blueprint $table) {
            $table->foreign('product_id', 'fk_product_id')->references('id')->on('programs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products_photos_paths', function (Blueprint $table) {
            $table->dropForeign('fk_product_id');
        });
    }
}
