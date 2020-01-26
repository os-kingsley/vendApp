<?php namespace Corymillz\Adverts\Http\Controllers;

use Illuminate\Routing\Controller;
use Mail;
use Request;
use Input;
use Corymillz\Adverts\Models\Credit;
use Auth;
use RainLab\User\Models\User;


class Token extends Controller
{

		public function currentToken(Request $request){

			$token = Request::input('currentToken');

		}

}