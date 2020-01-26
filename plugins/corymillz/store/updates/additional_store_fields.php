<?php namespace Corymillz\Store\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class NewStoreFeilds extends Migration
{

    public function up()
    {
        Schema::table('users', function($table)
        {

            $table->string('show_icon')->nullable();
            $table->string('store_description_font_style')->nullable();
            $table->string('store_description_font_color')->nullable();
            $table->string('about_us')->nullable();
            $table->string('payment_id')->nullable();
             $table->string('trust_badge')->nullable();
            
          

 
        });
    }

    public function down()
{
    Schema::table('users', function($table) {
        $table->dropColumn([
            'show_icon',
            'store_description_font_style',
            'store_description_font_color',
            'about_us',
            'payment_id',
            'trust_badge'
            

            
         
        ]);
    });
} 

}
