<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdverts3 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->integer('cat_id')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->text('cat_id')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
