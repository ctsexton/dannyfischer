<?php namespace CamSexton\Quotemachine\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCamsextonQuotemachineQuotes extends Migration
{
    public function up()
    {
        Schema::create('camsexton_quotemachine_quotes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('sort_order')->nullable()->unsigned();
            $table->string('name')->nullable();
            $table->text('quote')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('camsexton_quotemachine_quotes');
    }
}
