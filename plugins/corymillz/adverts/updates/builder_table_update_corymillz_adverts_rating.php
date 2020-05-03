<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsRating extends Migration
{
    public function up()
    {
        Schema::rename('corymillz_adverts_review', 'corymillz_adverts_rating');
        Schema::table('corymillz_adverts_rating', function($table)
        {
            $table->integer('user_id');
            $table->integer('advert_id');
            $table->integer('rating');
            $table->dropColumn('review');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
    
    public function down()
    {
        Schema::rename('corymillz_adverts_rating', 'corymillz_adverts_review');
        Schema::table('corymillz_adverts_review', function($table)
        {
            $table->dropColumn('user_id');
            $table->dropColumn('advert_id');
            $table->dropColumn('rating');
            $table->text('review');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
