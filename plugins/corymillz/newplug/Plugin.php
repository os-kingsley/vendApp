<?php namespace Corymillz\Newplug;

use System\Classes\PluginBase;
use Event;
use Corymillz\Adverts\Models\Credit;
use Auth;



class Plugin extends PluginBase
{
   public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

   public function boot()
{ 

if (\Request::is('buyer-registration')){

Event::listen('rainlab.user.activate', function ($user) {
  $group = 
    \Rainlab\User\Models\UserGroup::where('code', 'buyer')->first();
     

        $user->groups()->add($group);
    $user->save(); 
});

}

elseif  (\Request::is('seller-registration')){

Event::listen('rainlab.user.activate', function ($user) {
  $group = 
    \Rainlab\User\Models\UserGroup::where('code', 'seller')->first();
     
   $user->groups()->add($group);
    $user->save(); 

}); 



}

if (\Request::is('seller-registration')){

Event::listen('rainlab.user.register', function ($user) {
  


$credit = \Corymillz\Adverts\Models\Credit::firstOrCreate(['user_id' => $user->id ]);
        $credit->increment('amount', 500);
        $credit->refresh();
        return $credit->amount;
});

}

}


}














