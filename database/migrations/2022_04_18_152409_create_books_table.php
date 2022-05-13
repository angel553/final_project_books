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
        Schema::create('books', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('user_id')->constrained()->onDelete('cascade');         
            $table->string('titulo',50);
            $table->string('autor', 50);
            $table->string('editorial',50);
            $table->unsignedbigInteger('isbn');
            $table->integer('paginas');
            $table->date('fecha');
            $table->integer('precio');
            $table->string('book_image');
            $table->string('route_image');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
