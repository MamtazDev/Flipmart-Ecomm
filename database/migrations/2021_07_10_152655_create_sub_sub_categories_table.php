<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('subcategory_id');
            $table->string('subsubcategory_name_bn');
            $table->string('subsubcategory_name_en');
            $table->string('subsubcategory_slug_bn');
            $table->string('subsubcategory_slug_en');
            $table->foreign('category_id')->references('id')->on('categories') ->onDelete('cascade');
            $table->foreign('subcategory_id')->references('id')->on('sub_categories') ->onDelete('cascade');
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
        Schema::dropIfExists('sub_sub_categories');
    }
}
