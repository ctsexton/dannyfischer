<?php namespace CamSexton\AlbumGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCamsextonAlbumgalleryItems7 extends Migration
{
    public function up()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->string('attachments')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->dropColumn('attachments');
        });
    }
}
