<?php namespace Corymillz\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class ProfileFields extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {

            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('street_addr')->nullable();
           
            
          

 
        });
    }

    public function down()
{
    Schema::table('users', function($table) {
        $table->dropColumn([
            'phone',
            'company',
            'street_addr',
            
         
        ]);
    });
} 

}
