<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdverts9 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->decimal('rating_cache', 10, 0);
            $table->integer('rating_count');
            $table->dropColumn('rating');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->dropColumn('rating_cache');
            $table->dropColumn('rating_count');
            $table->text('rating');
        });
    }
}
