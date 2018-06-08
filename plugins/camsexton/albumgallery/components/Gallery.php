<?php namespace CamSexton\AlbumGallery\Components;

use Cms\Classes\ComponentBase;
use Db;

class Gallery extends ComponentBase {
	//
	public function componentDetails() {
		return [
			'name' => 'Album Gallery',
			'description' => 'Display albums in gallery'
		];
	}

	public function onRun() {
		//$this->getAlbums();
		$this->loadRecs();
	}

	public $recordings;
	
	protected function loadRecs() {
		$this->recordings = \CamSexton\AlbumGallery\Models\Recording::all();

	}
}
