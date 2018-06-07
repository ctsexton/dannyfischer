<?php namespace CamSexton\AlbumGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateCamsextonAlbumgalleryItems extends Migration
{
    public function up()
    {
        Schema::create('camsexton_albumgallery_items', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('image_file');
            $table->string('url');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('camsexton_albumgallery_items');
    }
}
