<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsRatings extends Migration
{
    public function up()
    {
        Schema::rename('corymillz_adverts_rating', 'corymillz_adverts_ratings');
    }
    
    public function down()
    {
        Schema::rename('corymillz_adverts_ratings', 'corymillz_adverts_rating');
    }
}
