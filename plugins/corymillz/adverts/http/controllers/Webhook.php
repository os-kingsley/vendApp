<?php namespace Corymillz\Adverts\Http\Controllers;

use Illuminate\Routing\Controller;
use Mail;
use Request;
use Input;
use Corymillz\Adverts\Models\Credit;
use Auth;
use RainLab\User\Models\User;




class Webhook extends Controller
{
	public function rave(Request $request){
 


		//merch credit code
		if(preg_match ('/^VENDCREDIT.*/' , Request::get('txRef') )){
		//if( Request::get('txRef') == "VENDCREDIT" ){

			$vars = [

				'id' => Request::get('id'),
				'txref' => Request::get('txRef'),
				'flwref' => Request::get('flwRef'),
				'created_at' => Request::get('createdAt'),
				'amount' => Request::get('amount'),
				'email' => Request::input('customer.email'),
				'status' => Request::get('status'),
				'phone' => Request::get('phone'),
				'seller_email' => Request::input('customer.fullName'),
				'payment_type' => Request::get('event.type'),
				'account_firstname' => Request::input('entity.first_name'),
				'account_lastname' => Request::input('entity.last_name'),
				'card' => Request::input('entity.card_last4'),
				'account_no'  => Request::input('entity.account_number'),



			];

			$email = Request::input('customer.email');




			Mail::send('corymillz.adverts::mail.customermsg', $vars, function($message) use($email){

				$message->to($email); 


			});



			if( Request::get('amount') == 1000 ){
				$credit = Credit::firstOrCreate(['user_id' => Request::input('customer.fullName')]);
				$credit->increment('amount', 1200);
				$credit->refresh();

				return $credit->amount;

			} elseif (Request::get('amount') == 3000 ){
				$credit = Credit::firstOrCreate(['user_id' => Request::input('customer.fullName')]);
				$credit->increment('amount', 3300);
				$credit->refresh();

				return $credit->amount;

			} elseif (Request::get('amount') == 5000) {
				$credit = Credit::firstOrCreate(['user_id' => Request::input('customer.fullName')]);
				$credit->increment('amount', 5500);
				$credit->refresh();

				return $credit->amount;

			}



		} else 
//Subaccount notification and buyer receipt

		{
			

			//$this['charge'] = (2.8 / 100) * Request::get('amount');

			$vars = [

				'id' => Request::get('id'),
				'txref' => Request::get('txRef'),
				'flwref' => Request::get('flwRef'),
				'created_at' => Request::get('createdAt'),
				'amount' => Request::get('amount'),
				'email' => Request::input('customer.email'),
				'status' => Request::get('status'),
				'phone' => Request::get('phone'),
				'seller_email' => Request::input('customer.fullName'),
				'payment_type' => Request::get('event.type'),
				'account_firstname' => Request::input('entity.first_name'),
				'account_lastname' => Request::input('entity.last_name'),
				'account_no'  => Request::input('entity.account_number'),
				'card' => Request::input('entity.card_last4'),
				'charge_protected' => 2.8 / 100 * Request::get('amount'),
				'charge_direct' =>   1.5 / 100 * Request::get('amount') + 100,
				'charge_direct_off' =>   1.5 / 100 * Request::get('amount')



			];

			$email = Request::input('customer.email');




			Mail::send('corymillz.adverts::mail.customermsg', $vars, function($message) use($email){

				$message->to($email); 


			});




			$email2 = Request::input('customer.fullName'); 

			$email1 = trim($email2); 


			Mail::send('send.payment.notification', $vars, function($message) use ($email1)
			{

				$message->to($email1); 


			});


			

            /**

			$email2 = Request::input('customer.fullName'); 

			$email1 = trim($email2); 


			Mail::send('corymillz.adverts::mail.customermsg', $vars, function($message) use ($email1)
			{

				$message->to($email1); 



				$email = Request::input('customer.email');




			Mail::send('corymillz.adverts::mail.customermsg', $vars, function($message) use($email){

				$message->to($email); 


			});



			});

**/

		}


	}
}

?>




