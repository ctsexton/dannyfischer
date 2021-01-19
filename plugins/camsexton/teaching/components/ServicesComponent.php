<?php namespace Camsexton\Teaching\Components;

use Cms\Classes\ComponentBase;
use CamSexton\Teaching\Models\Services;

class ServicesComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'services Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
	public $text;
	public function onRun() {
		$this->text = Services::first();
	}
}
