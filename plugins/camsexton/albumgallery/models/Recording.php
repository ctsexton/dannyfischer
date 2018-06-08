<?php namespace CamSexton\AlbumGallery\Models;

use Model;

/**
 * Model
 */
class Recording extends Model
{
    use \October\Rain\Database\Traits\Validation;
	use \October\Rain\Database\Traits\Sortable;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'camsexton_albumgallery_items';
	public $attachOne = [
		'album_art' => 'System\Models\File'
	];
}
