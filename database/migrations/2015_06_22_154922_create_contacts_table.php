<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('name');
            $table->string('designation', 100);
            $table->string('phone', 15);
            $table->string('email')->unique();
            $table->string('workphone', 15);
            $table->text('work_address');
            $table->text('notes');
            
            
            $table->timestamps();
        });
        
        
        Schema::table('contacts', function($table) {
       $table->foreign('user_id')->references('id')->on('users');
   });

       
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('contacts');
    }
}
