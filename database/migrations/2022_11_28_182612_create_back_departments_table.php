<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBackDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('back_departments', function (Blueprint $table) {
            
            $table->charset ='utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->longtext('description');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('trending')->default('0');
            $table->tinyInteger('feature')->default('0');
            // $table->tinyInteger('offer')->default('0');
            $table->string('meta_title');
            $table->string('image');
            // $table->string('qty');
            $table->string('meta_description');
            $table->string('meta_keywords');
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
        Schema::dropIfExists('back_departments');
    }
}
