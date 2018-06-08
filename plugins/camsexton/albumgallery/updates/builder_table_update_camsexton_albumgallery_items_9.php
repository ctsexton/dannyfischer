<?php namespace CamSexton\AlbumGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCamsextonAlbumgalleryItems9 extends Migration
{
    public function up()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->string('image_file', 255)->nullable()->change();
            $table->string('url', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->string('image_file', 255)->nullable(false)->change();
            $table->string('url', 255)->nullable(false)->change();
        });
    }
}
