<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsCat10 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_cat', function($table)
        {
            $table->integer('cat_view');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_cat', function($table)
        {
            $table->dropColumn('cat_view');
        });
    }
}
