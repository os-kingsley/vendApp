<?php namespace Corymillz\Adverts\Component;



use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Corymillz\Adverts\Models\Advert;
use Corymillz\Adverts\Models\Rating;
use Flash;
use ValidationException;
use System\Models\File;
use Auth;


class StarRating extends ComponentBase
{


     public function componentDetails(){
        return [
            'name' => 'Star Rating',
            'description' => 'Star Rating System'
        ];
    }

  public function onStar()
{


  
  $recordId = post('rate');

 $record = Advert::find($recordId);
 $newRating = Input::get('star');

      $rating = Rating::firstOrCreate([
            'user_id' => Auth::getUser()->id
]);

       $rating->rating = $newRating;
          $record->ratings()->save($rating);
          Flash::success('Rating Saved!');
          return redirect()->back();





}


}
