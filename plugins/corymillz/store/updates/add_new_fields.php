<?php namespace Corymillz\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddNewFeilds extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {

            $table->string('store_title')->nullable();
            $table->text('store_description')->nullable();
            $table->string('background_color')->nullable();
            $table->string('font_color')->nullable();
            $table->string('font_family')->nullable();
           $table->dateTime('last_seen')->nullable();
            
            
           

 
        });
    }

    public function down()
{
    Schema::table('users', function($table) {
        $table->dropColumn([
            'store_title',
            'store_description',
            'background_color',
            'font_color',
            'font_family',
            'last_seen'
            
         
        ]);
    });
} 

}
