<?php namespace Corymillz\Adverts\Component;



use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Corymillz\Adverts\Models\Buy;
use Flash;
use ValidationException;
use Corymillz\Adverts\Models\Cat;
use System\Models\File;
use Auth;


class BuyRequest extends ComponentBase 
{

 public function componentDetails(){
        return [
            'name' => 'Buy Form',
            'description' => 'Enter Buy Request'
        ];




}


public function onSubmit(){

    	$data = post();

    	$rules = [

    		'title' => 'required',
    		'maincat'  => 'required',
    	  'description' => 'required',
        'contact_means' => 'required',
        'location' => 'required'
        
            
            

    	];


      $messages = [
    'title.required|min:4' => 'The title field is required',
    'maincat.required' => 'The Category field is required',
    'description' => 'The description feild is required',
    'contact_means.required' => 'The Means of Contact field is required',
    'location.required' => 'The location feild is required',
];


    	$validation = Validator::make($data, $rules, $messages);

    	if ($validation->fails()) {
        throw new ValidationException($validation);

    } else {


       $buy = new Buy();
       $buy->title = Input::get('title');
       //$buy->slug = str_slug(Input::get('title'));
       $buy->description = Input::get('description');
       $buy->catbuy = Input::get('maincat');
        $buy->contact_means = Input::get('contact_means');
       $buy->location = Input::get('location');
    

        $buy->user_id = Auth::getUser()->id;

     

       $buy->save(null, post('_session_key'));

        $buy->slug = str_slug($buy->title).'-'.$buy->id; $buy->save();
       Flash::success('Request Posted!');
        $redirectSlug =  'buy-request-single/'.str_slug($buy->title).'-'.$buy->id;
       return Redirect::to($redirectSlug);
     
       


    }

}
}