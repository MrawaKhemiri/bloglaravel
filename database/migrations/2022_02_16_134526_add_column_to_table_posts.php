<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTablePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title');
            $table->string('content');
          
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')

                ->on('categories')->onDelete('cascade')
                ->onUpdate('cascade');

                $table->unsignedBigInteger('author_id');
            $table->foreign('author_id')->references('id')

                ->on('authors')->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->string('image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            //
        });
    }
}
