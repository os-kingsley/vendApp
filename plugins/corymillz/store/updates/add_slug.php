<?php namespace Corymillz\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddSlug extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {

            $table->string('slug')->nullable();
           
            
          

 
        });
    }

    public function down()
{
   

   
} 

}
