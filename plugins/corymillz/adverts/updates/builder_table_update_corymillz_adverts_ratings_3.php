<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsRatings3 extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_ratings', function($table)
        {
            $table->integer('rating');
            $table->integer('rateable_id');
            $table->integer('rateable_type');
            $table->dropColumn('advert_id');
            $table->dropColumn('votes');
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_ratings', function($table)
        {
            $table->dropColumn('rating');
            $table->dropColumn('rateable_id');
            $table->dropColumn('rateable_type');
            $table->integer('advert_id');
            $table->integer('votes');
        });
    }
}
