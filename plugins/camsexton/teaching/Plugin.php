<?php namespace Camsexton\Teaching;

use Backend;
use System\Classes\PluginBase;

/**
 * teaching Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'teaching',
            'description' => 'No description provided yet...',
            'author'      => 'camsexton',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Camsexton\Teaching\Components\ServicesComponent' => 'ServicesComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'camsexton.teaching.some_permission' => [
                'tab' => 'teaching',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'teaching' => [
                'label'       => 'teaching',
                'url'         => Backend::url('camsexton/teaching/services/update/1'),
                'icon'        => 'icon-leaf',
                'permissions' => ['camsexton.teaching.*'],
                'order'       => 500,
            ],
        ];
    }
}
