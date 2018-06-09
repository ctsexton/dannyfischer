<?php namespace CamSexton\AlbumGallery\Components;

use Cms\Classes\ComponentBase;
use CamSexton\AlbumGallery\Models\Recording;

class Gallery extends ComponentBase {
	//
	public function componentDetails() {
		return [
			'name' => 'Album Gallery',
			'description' => 'Display albums in gallery'
		];
	}

	public $albumgallery;

	public function onRun() {
		$this->albumgallery = Recording::orderBy('sort_order', 'asc')->get();
	}

}
