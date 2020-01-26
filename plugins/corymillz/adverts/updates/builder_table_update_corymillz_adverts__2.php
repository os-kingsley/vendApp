<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdverts2 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->text('cat_id');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->dropColumn('cat_id');
        });
    }
}
