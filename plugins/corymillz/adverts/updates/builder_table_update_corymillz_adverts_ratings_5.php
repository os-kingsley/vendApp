<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsRatings5 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_ratings', function($table)
        {
            $table->dropColumn('advert_id');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_ratings', function($table)
        {
            $table->integer('advert_id');
        });
    }
}
