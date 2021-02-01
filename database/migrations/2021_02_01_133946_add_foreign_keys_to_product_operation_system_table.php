<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToProductOperationSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_operation_system', function (Blueprint $table) {
            $table->foreign('operation_system_id', 'fk_operation_system_id')->references('id')->on('operation_systems')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('product_id', 'fk_product_id1')->references('id')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product_operation_system', function (Blueprint $table) {
            $table->dropForeign('fk_operation_system_id');
            $table->dropForeign('fk_product_id1');
        });
    }
}
