<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
          //  $table->unsignedBigInteger('article_id'); //type muste be the same van pot, user table == id()  , S1
          
           //S 2 
           $table->foreignId('article_id')->constrained()->cascadeOnDelete();

         // $table->unsignedBigInteger('user_id');
          //S 2 
          $table->foreignId('user_id')->constrained()->cascadeOnDelete();


            $table->text('body');
            $table->timestamps();

           
            //if we delet post on article table then delete its comment S!
            // $table->foreign('article_id')->references('id')->on('article')->onDelete('cascade'); OR
         //   $table->foreign('article_id')->references('id')->on('article')->cascadeOnDelete(); //then run php artisan migrate:rollback  OR S2

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
