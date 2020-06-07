<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColDocLocParPisDtoCaTe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
         Schema::table('users', function (Blueprint $table) {

               $table->string('domicilio', 200);



         });
     }

     /**
      * Reverse the migrations.
      *
      * @return void
      */
     public function down()
     {
         Schema::table('users', function (Blueprint $table) {

             $table->dropColumn('domicilio');



         });
     }
   }
