<?php namespace Corymillz\Adverts\Models;

use Model;


/**
 * Model
 */
class Rating extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'corymillz_adverts_ratings';


  protected $fillable = ['user_id','rateable_id'];


   public $morphTo = [
        'rateable' => []
    ];


    public $belongsTo= [

    'rate_user' => ['RainLab\User\Models\User']
    ];





    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
