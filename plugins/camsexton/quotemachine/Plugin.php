<?php namespace CamSexton\Quotemachine;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
		return [
			'CamSexton\Quotemachine\Components\QuoteFlash' => 'quoteflash'
		];
    }

    public function registerSettings()
    {
    }
}
