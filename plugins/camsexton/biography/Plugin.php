<?php namespace CamSexton\Biography;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
		return [
			'CamSexton\Biography\Components\BiographyComponent' => 'biography'
		];
    }

    public function registerSettings()
    {
    }
}
