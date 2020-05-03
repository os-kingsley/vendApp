<?php namespace Corymillz\Adverts\Classes;

use Closure;
use Auth;


class LastLogin 
{





    public function handle($request, Closure $next)
    {
     


        if (!Auth::check()) {
            return $next($request);
        }
      
        $user = Auth::getUser();
        $user->update([
            'last_seen' => new \DateTime(),
        ]);
        return $next($request);

}

}