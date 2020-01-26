<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdverts6 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->text('location');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->dropColumn('location');
        });
    }
}
