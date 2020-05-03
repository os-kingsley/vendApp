<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCorymillzAdvertsBuyCat extends Migration
{
    public function up()
    {
        Schema::create('corymillz_adverts_buy_cat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('buy_id');
            $table->integer('cat_id');
            $table->primary(['buy_id','cat_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('corymillz_adverts_buy_cat');
    }
}
