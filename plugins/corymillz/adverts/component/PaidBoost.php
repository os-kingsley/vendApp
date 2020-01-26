<?php namespace Corymillz\Adverts\Component;


use Cms\Classes\ComponentBase;
use Redirect;
use Auth;
use Corymillz\Adverts\Models\Advert;
use Corymillz\Adverts\Models\Msb;
use Corymillz\Adverts\Models\Mbb;
use Corymillz\Adverts\Models\Meb;
use Corymillz\Adverts\Models\Bmsb;
use Corymillz\Adverts\Models\Bmbb;
use Corymillz\Adverts\Models\Bmeb;
use Carbon\Carbon;
use Input;
use Flash;

class PaidBoost extends ComponentBase

{

   public function componentDetails(){
    return [
        'name' => 'Paid Boost',
        'description' => 'Paid Boost for Ads'
    ];
} 

//Subscription code for monthly boost
// monthly standard boost

function onGetUserCreditMsb(){

  Auth::getUser()->credit->decrement('amount', 500);
}

function onSaveProductIDMsb(){

    $msb = new Msb();
    $msb->msb = post('msb');
    $msb->save();


}
function onBoostProductMsb(){

 $recordId = post('msb');
 Advert::where('id', $recordId)->update(['created_at'=>now()]);




}

function onPaidBoostMsb(){

   $productId = Msb::lists('msb');
   Advert::whereIn('id', $productId)
   ->where('created_at', '<=', now()->subDay())
   ->update(['created_at'=>now()]);


}


function onMsb()

{
    $this->onGetUserCreditMsb();
    $this->onSaveProductIDMsb();
    $this->onBoostProductMsb();
     Flash::success('Subscribed Boost Successful!');
     return Redirect::back();
    

}




// monthly business boost



function onGetUserCreditMbb(){

   Auth::getUser()->credit->decrement('amount', 700);
}

function onSaveProductIDMbb(){

    $mbb = new Mbb();
    $mbb->mbb = post('mbb');
    $mbb->save();


}
function onBoostProductMbb(){

 $recordId = post('mbb');
 Advert::where('id', $recordId)->update(['created_at'=>now()]);
  Flash::success('Subscribed Boost Successful!');


}

function onPaidBoostMbb(){

   $productId = Mbb::lists('mbb');
   Advert::whereIn('id', $productId)
   ->where('created_at', '<=', now()->subHours(12))
   ->update(['created_at'=>now()]);


}


function onMbb()

{
    $this->onGetUserCreditMbb();
    $this->onSaveProductIDMbb();
    $this->onBoostProductMbb();
     return Redirect::back();

}



// monthly enterprise boost



function onGetUserCreditMeb(){

   Auth::getUser()->credit->decrement('amount', 900);
}

function onSaveProductIdMeb(){

    $meb = new Meb();
    $meb->meb = post('meb');
    $meb->save();


}
function onBoostProductMeb(){

 $recordId = post('meb');
 Advert::where('id', $recordId)->update(['created_at'=>now()]);

}

function onPaidBoostMeb(){

   $productId = Meb::lists('meb');
   Advert::whereIn('id', $productId)
   ->where('created_at', '<=', now()->subHours(6))
   ->update(['created_at'=>now()]);


}


function onMeb()

{
    $this->onGetUserCreditMeb();
    $this->onSaveProductIdMeb();
    $this->onBoostProductMeb();
    Flash::success('Boost Plan Active!');
     return Redirect::back();
}



//Subscription code for bi-monthly boost
// bi-monthly standard boost


function onGetUserCreditBmsb(){

   Auth::getUser()->credit->decrement('amount', 250);
}

function onSaveProductIdBmsb(){

    $bmsb = new Bmsb();
    $bmsb->bmsb = post('bmsb');
    $bmsb->save();


}
function onBoostProductBmsb(){

 $recordId = post('bmsb');
 Advert::where('id', $recordId)->update(['created_at'=>now()]);

}

function onPaidBoostBmsb(){

   $productId = Bmsb::lists('bmsb');
   Advert::whereIn('id', $productId)
   ->where('created_at', '<=', now()->subDay())
   ->update(['created_at'=>now()]);


}


function onBmsb()

{
    $this->onGetUserCreditBmsb();
    $this->onSaveProductIdBmsb();
    $this->onBoostProductBmsb();
    Flash::success('Boost Plan Active!');
     return Redirect::back();

}


// bi-monthly business boost

function onGetUserCreditBmbb(){

   Auth::getUser()->credit->decrement('amount', 350);
}

function onSaveProductIdBmbb(){

    $bmbb = new Bmbb();
    $bmbb->bmbb = post('bmbb');
    $bmbb->save();


}
function onBoostProductBmbb(){

 $recordId = post('bmbb');
 Advert::where('id', $recordId)->update(['created_at'=>now()]);

}

function onPaidBoostBmbb(){

   $productId = Bmbb::lists('bmbb');
   Advert::whereIn('id', $productId)
   ->where('created_at', '<=', now()->subHours(12))
   ->update(['created_at'=>now()]);


}


function onBmbb()

{
    $this->onGetUserCreditBmbb();
    $this->onSaveProductIdBmbb();
    $this->onBoostProductBmbb();
    Flash::success('Boost Plan Active!');
     return Redirect::back();

}

// bi-monthly enterprise boost

function onGetUserCreditBmeb(){

   Auth::getUser()->credit->decrement('amount', 450);
}

function onSaveProductIdBmeb(){

    $bmeb = new Bmeb();
    $bmeb->bmeb = post('bmeb');
    $bmeb->save();


}
function onBoostProductBmeb(){

 $recordId = post('bmeb');
 Advert::where('id', $recordId)->update(['created_at'=>now()]);

}

function onPaidBoostBmeb(){

   $productId = Bmeb::lists('bmeb');
   Advert::whereIn('id', $productId)
   ->where('created_at', '<=', now()->subHours(6))
   ->update(['created_at'=>now()]);


}


function onBmeb()

{
    $this->onGetUserCreditBmeb();
    $this->onSaveProductIdBmeb();
    $this->onBoostProductBmeb();
    Flash::success('Boost Plan Active!');
     return Redirect::back();

}


}