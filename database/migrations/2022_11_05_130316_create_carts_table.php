<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (!Schema::hasTable('carts')){
            Schema::create('carts', function (Blueprint $table) {
                $table->unsignedInteger('customerNumber')->nullable();
                $table->string('productCode',15)->nullable();
                $table->integer('quantity');
                $table->timestamps();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    // public function down()
    // {
    //     Schema::dropIfExists('carts');
    // }

};
