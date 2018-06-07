<?php namespace CamSexton\AlbumGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCamsextonAlbumgalleryItems3 extends Migration
{
    public function up()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->renameColumn('sort_order', 'id');
        });
    }
    
    public function down()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->renameColumn('id', 'sort_order');
        });
    }
}
