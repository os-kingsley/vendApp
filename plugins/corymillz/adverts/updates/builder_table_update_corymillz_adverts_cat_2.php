<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsCat2 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_cat', function($table)
        {
            $table->integer('parent_id')->nullable()->change();
            $table->integer('nest_left')->nullable()->change();
            $table->integer('nest_right')->nullable()->change();
            $table->integer('nest_depth')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_cat', function($table)
        {
            $table->integer('parent_id')->nullable(false)->change();
            $table->integer('nest_left')->nullable(false)->change();
            $table->integer('nest_right')->nullable(false)->change();
            $table->integer('nest_depth')->nullable(false)->change();
        });
    }
}
