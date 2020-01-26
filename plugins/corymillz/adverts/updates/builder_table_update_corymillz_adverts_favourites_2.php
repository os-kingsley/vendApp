<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsFavourites2 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_favourites', function($table)
        {
            $table->dropColumn('id');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_favourites', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
}
