<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdverts18 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->text('spec_name');
            $table->text('spec_detail');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->dropColumn('spec_name');
            $table->dropColumn('spec_detail');
        });
    }
}
