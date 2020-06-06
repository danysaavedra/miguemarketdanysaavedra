<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColumnaCategoryProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::table('Products', function (Blueprint $table) {

             $table->unsignedBigInteger('category_id')->nullable();
             $table->foreign('category_id')->references('id')->on('Categories');


         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('Products', function (Blueprint $table) {

             $table->dropColumn('category_id');
             // $table->foreign('product_id')->references('id')->on('Products');

         });
     }
 }
