<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsBuyrequest3 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->dropColumn('cat_id');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->integer('cat_id')->nullable();
        });
    }
}
