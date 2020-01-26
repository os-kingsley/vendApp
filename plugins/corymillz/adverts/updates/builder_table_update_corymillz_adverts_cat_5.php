<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsCat5 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_cat', function($table)
        {
            $table->integer('buy_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_cat', function($table)
        {
            $table->dropColumn('buy_id');
        });
    }
}
