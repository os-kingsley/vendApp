<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdvertsBuyrequestCat extends Migration
{
    public function up()
    {
        Schema::rename('corymillz_adverts_buy_cat', 'corymillz_adverts_buyrequest_cat');
    }
    
    public function down()
    {
        Schema::rename('corymillz_adverts_buyrequest_cat', 'corymillz_adverts_buy_cat');
    }
}
