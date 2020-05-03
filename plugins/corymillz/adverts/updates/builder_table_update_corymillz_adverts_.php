<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCorymillzAdverts extends Migration
{
    public function up()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->text('specification');
            $table->text('minimum_order');
            $table->text('supply_ability');
            $table->boolean('delivery');
            $table->text('delivery_time');
            $table->text('discount_offer');
            $table->text('payment_type');
            $table->text('slug');
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('corymillz_adverts_', function($table)
        {
            $table->dropColumn('specification');
            $table->dropColumn('minimum_order');
            $table->dropColumn('supply_ability');
            $table->dropColumn('delivery');
            $table->dropColumn('delivery_time');
            $table->dropColumn('discount_offer');
            $table->dropColumn('payment_type');
            $table->dropColumn('slug');
            $table->dropColumn('deleted_at');
        });
    }
}
