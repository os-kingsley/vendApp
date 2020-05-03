<?php namespace Corymillz\Adverts\Models;

use Model;

/**
 * Model
 */
class Cat extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\NestedTree;
   


   

    /**
     * @var string The database table used by the model.
     */
    public $table = 'corymillz_adverts_cat';

 
    public $hasMany = [
    'adverts' => [

        'Corymillz\Adverts\Models\Advert',
        'table' => 'corymillz_adverts_adverts_cat',
        'order' => 'title',
        'otherKey' => 'buy_id'
        
        
        

        ]
    ];

    /**Relation**/

    public $attachOne = [
        "poster" => "System\Models\File"

    ];



 
public $belongsTo = [ 
         'user' => [ 'RainLab\User\Models\User', 'key' => 'user_id']
     ];

   


    
    

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

}