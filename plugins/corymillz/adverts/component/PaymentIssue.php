<?php namespace Corymillz\Adverts\Component;



use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Flash;
use ValidationException;
use Auth;




class PaymentIssue extends ComponentBase

{

	    public function componentDetails(){
        return [
            'name' => 'Payment Issue',
            'description' => 'Raise a Payment Issue'
        ];
    }

    public function onSend(){


    	$data = post();
    	
    	$rules = [

    		
    		'name'  => 'required',
    		'txref'  => 'required',
    		'issue' => 'required',
            
     
         
         
          ];



    	$validation = Validator::make($data, $rules);

    	if ($validation->fails()) {
        throw new ValidationException($validation);

    }
    else {

    		$vars = [

		'name' => Input::get('name'),
		'email' => Input::get('email'),
		'txref' => Input::get('txref'),
		'issue' => Input::get('issue'),
		
		


	];

    $userEmail = Auth::getUser()->email;

	Mail::send('payment.issue', $vars, function($message) use($userEmail){
        $message->from($userEmail);
		$message->to('issue@vend.com.ng');
		$message->subject('Payment Issue');

     
       
	});
Flash::success('Your Issue has been sent, You will be contacted soon!');
	return Redirect::back();
    }
    }

}