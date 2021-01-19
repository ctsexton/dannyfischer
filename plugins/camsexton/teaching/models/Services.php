<?php namespace Camsexton\Teaching\Models;

use Model;

/**
 * services Model
 */
class Services extends Model
{
    use \October\Rain\Database\Traits\Validation;

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
    public $table = 'camsexton_teaching_services';

}
