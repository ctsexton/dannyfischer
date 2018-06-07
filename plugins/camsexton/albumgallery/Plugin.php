<?php namespace CamSexton\AlbumGallery;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
		return [
			'CamSexton\AlbumGallery\Components\Gallery' => 'gallery'
		];
    }

    public function registerSettings()
    {
    }
}
