<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsBuyrequest17 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->integer('buy_id')->nullable();
            $table->integer('cat_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->dropColumn('buy_id');
            $table->dropColumn('cat_id');
        });
    }
}
