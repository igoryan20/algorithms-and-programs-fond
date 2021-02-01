<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductOperationSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_operation_system', function (Blueprint $table) {
            $table->integer('product_id');
            $table->integer('operation_system_id')->index('fk_operation_system_id');
            $table->primary(['product_id', 'operation_system_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_operation_system');
    }
}
