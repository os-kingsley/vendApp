<?php namespace Corymillz\Adverts\Models;

use Model;

/**
 * Model
 */
class Buy extends Model
{
    use \October\Rain\Database\Traits\Validation;
   
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'corymillz_adverts_buyrequest';

    //relationship


     public $attachMany = [
        "buy_image" => "System\Models\File"

    ];


     public $belongsTo = [ 
         'user' => [ 'RainLab\User\Models\User', 'key' => 'user_id']
     ];


    public $belongsToMany = [
        'catbuy' => [
        'Corymillz\Adverts\Models\Cat',
        'table' => 'corymillz_adverts_buyrequest_cat',
        'order' => 'cat_title',
        'key' => 'buy_id',
        'otherKey' => 'cat_id'
     
       ]
    ];



    public function getContactMeansOptions() {

    return [
        'Call Only' => 'Call Only',
        'Message Only'       => 'Message Only',
         'Message Or Call'       => 'Message Or Call',
       ];
   }


    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
