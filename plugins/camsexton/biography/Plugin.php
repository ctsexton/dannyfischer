<?php namespace CamSexton\Biography;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
		return [
			'CamSexton\Biography\Components\Biography' => 'biography'
		];
    }

    public function registerSettings()
    {
    }
}
