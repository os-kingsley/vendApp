<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsBuyrequest2 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->string('title')->change();
            $table->string('slug')->change();
            $table->integer('cat_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_buyrequest', function($table)
        {
            $table->string('title', 191)->change();
            $table->string('slug', 191)->change();
            $table->integer('cat_id')->nullable(false)->change();
        });
    }
}
