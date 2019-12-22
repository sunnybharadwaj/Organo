<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogpostCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogpost_category', function (Blueprint $table) {
            $table->primary(['post_id', 'category_id']);
            $table->unsignedInteger('post_id');
            $table->unsignedInteger('category_id');
            $table->timestamps();
            $table->foreign('post_id')->references('id')->on('blogposts')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('blogcategories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogpost_category');
    }
}
