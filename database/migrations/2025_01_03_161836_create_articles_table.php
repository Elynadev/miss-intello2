<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{// database/migrations/xxxx_xx_xx_create_articles_table.php
public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('set null');
        $table->string('title');
        $table->text('content');
        $table->string('image')->nullable();
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('articles');
    }
}

