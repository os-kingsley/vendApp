<?php namespace Corymillz\Adverts\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCorymillzAdvertsBmbb extends Migration
{
    public function up()
    {
        Schema::create('corymillz_adverts_bmbb', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('bmbb');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('corymillz_adverts_bmbb');
    }
}
