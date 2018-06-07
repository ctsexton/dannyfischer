<?php namespace CamSexton\Biography\Components;

use Cms\Classes\ComponentBase;
use Db;

class Biography extends ComponentBase {
	//
	public function componentDetails() {
		return [
			'name' => 'Bio Text',
			'description' => 'Display bio text'
		];
	}

	public function onRun() {
		$this->getBio();
	}

	public $biography;

	protected function getBio() {
		$this->biography = Db::select("
			SELECT
			bio
			FROM camsexton_biography_text
			");
	}
}
