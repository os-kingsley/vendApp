<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsRatings2 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_ratings', function($table)
        {
            $table->renameColumn('rating', 'votes');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_ratings', function($table)
        {
            $table->renameColumn('votes', 'rating');
        });
    }
}
