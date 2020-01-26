<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCorymillzAdvertsCredits extends Migration
{
    public function up()
    {
        Schema::create('corymillz_adverts_credits', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('amount')->default(0);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('corymillz_adverts_credits');
    }
}
