<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsMsb extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_msb', function($table)
        {
            $table->renameColumn('msb_id', 'msb');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_msb', function($table)
        {
            $table->renameColumn('msb', 'msb_id');
        });
    }
}
