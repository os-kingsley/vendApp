<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsBuyrequest21 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->integer('user_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->dropColumn('user_id');
        });
    }
}
