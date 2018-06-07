<?php namespace CamSexton\AlbumGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCamsextonAlbumgalleryItems4 extends Migration
{
    public function up()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->integer('sort_order')->nullable()->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->dropColumn('sort_order');
        });
    }
}
