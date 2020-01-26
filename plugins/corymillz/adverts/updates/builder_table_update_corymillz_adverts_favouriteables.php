<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsFavouriteables extends Migration
{
    public function up()
    {
        Schema::rename('corymillz_adverts_favorites', 'corymillz_adverts_favouriteables');
        Schema::table('corymillz_adverts_favouriteables', function($table)
        {
            $table->integer('favouriteable_id');
            $table->string('favouriteable_type');
            $table->dropColumn('advert_id');
        });
    }
    
    public function down()
    {
        Schema::rename('corymillz_adverts_favouriteables', 'corymillz_adverts_favorites');
        Schema::table('corymillz_adverts_favorites', function($table)
        {
            $table->dropColumn('favouriteable_id');
            $table->dropColumn('favouriteable_type');
            $table->integer('advert_id')->unsigned();
        });
    }
}
