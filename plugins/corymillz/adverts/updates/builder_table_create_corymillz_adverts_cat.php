<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCorymillzAdvertsCat extends Migration
{
    public function up()
    {
        Schema::create('corymillz_adverts_cat', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cat_title');
            $table->integer('parent_id')->unsigned();
            $table->integer('nest_left')->unsigned();
            $table->integer('nest_right')->unsigned();
            $table->integer('nest_depth')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('corymillz_adverts_cat');
    }
}
