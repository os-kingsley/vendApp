<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsBuyrequest10 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->text('location');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->dropColumn('location');
        });
    }
}
