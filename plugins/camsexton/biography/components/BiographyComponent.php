<?php namespace CamSexton\Biography\Components;

use Cms\Classes\ComponentBase;
use CamSexton\Biography\Models\Biography;

class BiographyComponent extends ComponentBase {
	//
	public function componentDetails() {
		return [
			'name' => 'Bio Text',
			'description' => 'Display bio text'
		];
	}

	public $biography;
	public function onRun() {
		$this->biography = Biography::first();
	}
}
