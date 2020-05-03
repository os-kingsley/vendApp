<?php namespace Corymillz\Adverts\Component;



use Cms\Classes\ComponentBase;
use Input;
use Mail;
use Validator;
use Redirect;
use Flash;
use ValidationException;
use System\Models\File;
use Auth;



class PaymentSetup extends ComponentBase
{





     public function componentDetails(){
        return [
            'name' => 'Payment Setup',
            'description' => 'Payment Setup Request'
        ];
    }

public function onSend(){

	 	$data = post();

    	$rules = [

    		
    		'account_name'  => 'required',
    		'account_no'  => 'required',
    		'bank' => 'required',
            'identification' => Input::file('identification'),
            
     
         
         
            ];
 


    	$validation = Validator::make($data, $rules);

    	if ($validation->fails()) {
        throw new ValidationException($validation);

    } else {
   
	$vars = [

		'company_name' => Auth::getUser()->company,
		'email' => Auth::getUser()->email,
		'identification' => Input::file('identification'),
		'account_name' => Input::get('account_name'),
		'account_no' => Input::get('account_no'),
		'bank' => Input::get('bank_name'),
		


	];

    $userEmail = Auth::getUser()->email;


	Mail::send('payment.setup.sent', $vars, function($message) use($userEmail){
        $message->from($userEmail);
		$message->to('setup@vend.com.ng');
        $message->attach(Input::file('identification'), ['as' => Input::file('identification')->getClientOriginalName()]);
		$message->subject('Payment Account Setup Request');

     Flash::success('Your Request has been sent!');
     
       
	});

	return Redirect::back();


}
}


}