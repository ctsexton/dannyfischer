<?php namespace CamSexton\Quotemachine\Models;

use Model;

/**
 * Model
 */
class Quote extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'camsexton_quotemachine_quotes';
}
