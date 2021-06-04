<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->integer("userid")->nullable();
            $table->string("name");
            $table->string('description')->nullable();
            $table->date('deadline')->nullable();
            $table->string('image')->default("/img/fotografie_default.jpg");
            $table->string("kind");
            $table->foreign("kind")->references("kind")->on("kind_of_product");
            $table->boolean("uitlenen")->default(true); 
            $table->string("uitlener")->nullable(); 
            $table->string("eigenaar")->nullable();
            $table->boolean("voltooid")->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropForeign('product_kind_foreign');
        });
        Schema::dropIfExists('product');
    }
}
