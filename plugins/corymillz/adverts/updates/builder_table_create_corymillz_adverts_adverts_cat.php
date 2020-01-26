<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCorymillzAdvertsAdvertsCat extends Migration
{
    public function up()
    {
        Schema::create('corymillz_adverts_adverts_cat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('advert_id');
            $table->integer('cat_id');
            $table->primary(['advert_id','cat_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('corymillz_adverts_adverts_cat');
    }
}
