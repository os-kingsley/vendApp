<?php namespace Corymillz\Adverts\Models;

use Model;
use RainLab\User\Models\User;



/**
 * Model
 */
class Advert extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'corymillz_adverts_';

     public $jsonable = ['spec_name', 'spec_detail'];
     
     public $attachMany = [
        "allimage" => "System\Models\File"

         ];


    public $belongsTo = [
        'cats' => [

        'Corymillz\Adverts\Models\Cat',
        'table' => 'corymillz_adverts_adverts_cat',
        'order' => 'cat_title',
        'key' => 'cat_id',
        'otherKey' => 'id'

    
        
     

        ],


        'user' => [ 'RainLab\User\Models\User', 'key' => 'user_id'],

       

        ];



    public $morphToMany = [
        'userss' => [

        'RainLab\User\Models\User',
        'table' => 'corymillz_adverts_favourites',
        'name' => 'favourite',
       ]

        ];

    public $morphMany = [
        'ratings' => [

            'Corymillz\Adverts\Models\Rating',
            'name' => 'rateable',
            

        ]

    ];





 

    public function getDeliveryOptions() {

    return [
        'Yes' => 'Yes',
        'No'       => 'No',
       ];
   }


   // public $implement = ['RainLab.Location.Behaviors.LocationModel'];


   protected $fillable =  ['created_at'];


   

    

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
