<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->increments('id');
            $table->string('name');
            $table->string('categories');
        });

        DB::table('categories')
        ->insert([  
            ['name' => 'Technical',  'Categories' => 'technical'],
            ['name' => 'Health Programs',  'Categories' => 'health programs'],
            ['name' => 'Finance/Legal',  'Categories' => 'finance/legal'],
            ['name' => 'E-Claims',  'Categories' => 'e-claims'],
            ['name' => 'PCB',  'Categories' => 'pcb'],
            ['name' => 'Suggestion',  'Categories' => 'suggestion'],
               ]);
        }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
