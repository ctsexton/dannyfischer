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
		$this->getAlbums();
	}

	public $albums;

	protected function getAlbums() {
		$this->albums = Db::select("
			SELECT
			image_file,
			url,
			artist,
			title,
			year
			FROM camsexton_albumgallery_items
			ORDER BY sort_order");
	}
}
