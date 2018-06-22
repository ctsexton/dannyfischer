<?php namespace CamSexton\Quotemachine\Components;

use Cms\Classes\ComponentBase;
use CamSexton\Quotemachine\Models\Quote;

class Quoteflash extends ComponentBase {
	public function componentDetails() {
		return [
			'name' => 'Quote Machine',
			'description' => 'Flashes quotes on a timer'
		];
	}

	public $quoteArr;
	public function onRun() {
		$this->quoteArr = Quote::all()->toJson();
	}

}
