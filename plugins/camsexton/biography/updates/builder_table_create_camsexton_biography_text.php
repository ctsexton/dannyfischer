<?php namespace CamSexton\Biography\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCamsextonBiographyText extends Migration
{
    public function up()
    {
        Schema::create('camsexton_biography_text', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('bio')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('camsexton_biography_text');
    }
}
