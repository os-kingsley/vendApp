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
$recordId = Input::get('rate');

 $record = Advert::find($recordId);
 $newRating = Input::get('star');

$rating = Rating::firstOrNew([
  'user_id' => Auth::id(),
  'rateable_type' => Advert::class,
  'rateable_id' => $recordId,
]);

// If this is a new rating we need to specify the user id:
if (!$recordId) {
  $rating->user_id = Auth::getUser()->id;
}

// Whether new or not, set the proper rating value, then save it through the post:
$rating->rating = $newRating;
$record->ratings()->save($rating);

        Flash::success('Rating Saved!');
          return redirect()->back();

  
  




}


}
