<?php namespace Corymillz\Adverts\Models;

use Model;

/**
 * Model
 */
class Credit extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
protected $fillable = ['user_id'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'corymillz_adverts_credits';

       public $belongsTo = [
        'user' => [

        'RainLab\User\Models\User',  
    ]

        ];

     

       public $hidden = [
      'id',
      'user_id'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
