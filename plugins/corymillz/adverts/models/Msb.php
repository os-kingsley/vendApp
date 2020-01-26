<?php namespace Corymillz\Adverts\Models;

use Model;

/**
 * Model
 */
class Msb extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'corymillz_adverts_msb';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
