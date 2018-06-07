<?php namespace CamSexton\AlbumGallery\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateCamsextonAlbumgalleryItems extends Migration
{
    public function up()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->string('artist')->nullable();
            $table->string('album')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('camsexton_albumgallery_items', function($table)
        {
            $table->dropColumn('artist');
            $table->dropColumn('album');
            $table->dropColumn('year');
        });
    }
}
