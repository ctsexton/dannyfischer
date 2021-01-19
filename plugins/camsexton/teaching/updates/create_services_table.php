<?php namespace CamSexton\Teaching\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCamsextonTeachingServices extends Migration
{
    public function up()
    {
        Schema::create('camsexton_teaching_services', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('info')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('camsexton_teaching_services');
    }
}
