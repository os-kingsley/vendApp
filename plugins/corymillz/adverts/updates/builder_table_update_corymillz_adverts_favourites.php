<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsFavourites extends Migration
{
    public function up()
    {
        Schema::rename('corymillz_adverts_favouriteables', 'corymillz_adverts_favourites');
        Schema::table('corymillz_adverts_favourites', function($table)
        {
            $table->integer('user_id')->unsigned(false)->change();
            $table->renameColumn('favouriteable_id', 'advert_id');
            $table->dropColumn('id');
            $table->dropColumn('favouriteable_type');
            $table->primary(['user_id','advert_id']);
        });
    }
    
    public function down()
    {
        Schema::rename('corymillz_adverts_favourites', 'corymillz_adverts_favouriteables');
        Schema::table('corymillz_adverts_favouriteables', function($table)
        {
            $table->dropPrimary(['user_id','advert_id']);
            $table->integer('user_id')->unsigned()->change();
            $table->renameColumn('advert_id', 'favouriteable_id');
            $table->increments('id')->unsigned();
            $table->string('favouriteable_type', 191);
        });
    }
}
