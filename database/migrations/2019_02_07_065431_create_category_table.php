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
         
            $table->string('categories');
        });

        DB::table('categories')
        ->insert([  
            ['id' => '1',  'Categories' => 'technical'],
            ['id' => '2',  'Categories' => 'health programs'],
            ['id' => '3',  'Categories' => 'finance/legal'],
            ['id' => '4',  'Categories' => 'e-claims'],
            ['id' => '5',  'Categories' => 'pcb'],
            ['id' => '6',  'Categories' => 'suggestion'],
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
