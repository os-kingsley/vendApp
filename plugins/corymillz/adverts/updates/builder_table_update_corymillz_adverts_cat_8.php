<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsCat8 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_cat', function($table)
        {
            $table->integer('advert_id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_cat', function($table)
        {
            $table->dropColumn('advert_id');
        });
    }
}
