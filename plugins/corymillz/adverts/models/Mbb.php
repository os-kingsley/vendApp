<?php namespace Corymillz\Adverts\Models;

use Model;

/**
 * Model
 */
class Mbb extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'corymillz_adverts_mbb';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
