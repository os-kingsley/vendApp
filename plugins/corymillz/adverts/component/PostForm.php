<?php namespace Corymillz\Adverts\Component;



use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Corymillz\Adverts\Models\Advert;
use Flash;
use ValidationException;
use Corymillz\Adverts\Models\Cat;
use System\Models\File;
use Auth;


 
class PostForm extends ComponentBase
{





     public function componentDetails(){
        return [
            'name' => 'Post Form',
            'description' => 'Enter Adverts'
        ];
    }




    public function onSubmit(){
 
    	$data = post();

    	$rules = [

    		'title' => 'required|min:4',
    		//'catsId'  => 'required',
    		'cats'  => 'required',
    		'price' => 'required_without:contact',
        'contact' => 'required_without:price',
        'delivery' => 'required',
        'description' => 'required',
         'location' => 'required',
         
         
         
            ];

      $messages = [
    'title.required|min:4' => 'The title field is required',
    'cats.required' => 'The Category and Subcategory fields are required',
    'price.required_without:contact' => 'Enter Price or contact field',
    'contact.required_without:contact' => 'Enter Price or contact field',
    'delivery.required' => 'The delivery field is required',
    'description' => 'The description feild is required',
    'location.required' => 'The location feild is required',
];



    	$validation = Validator::make($data, $rules, $messages);

    	if ($validation->fails()) {
        throw new ValidationException($validation);

    } else {


       $advert = new Advert();
       $advert->title = Input::get('title');
       //$advert->slug = str_slug(Input::get('title'));
       $advert->description = Input::get('description');
       $advert->price = Input::get('price');
       $advert->minimum_order = Input::get('minimum_order');
       $advert->spec_name = Input::get('spec_name');
       $advert->spec_detail = Input::get('spec_detail');
       $advert->supply_ability = Input::get('supply_ability'); 
       $advert->discount_offer = Input::get('discount_offer');
       $advert->delivery =  Input::get('delivery');
       $advert->delivery_time = Input::get('delivery_time');
       $advert->cats = Input::get('cats');
       $advert->location = Input::get('location');
       
       $advert->user_id = Auth::getUser()->id;
  


  

       $advert->save(null, post('_session_key'));



       $advert->slug = str_slug($advert->title).'-'.$advert->id; $advert->save();
       Flash::success('Successfully Posted!');
        $redirectSlug =  'product-single/'.str_slug($advert->title).'-'.$advert->id;
       return Redirect::to($redirectSlug);
     
       
       
     
    }


}


}


