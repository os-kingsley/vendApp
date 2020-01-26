<?php namespace Corymillz\Adverts;

use System\Classes\PluginBase;
use RainLab\User\Models\User;
use Corymillz\Adverts\Models\Advert;
use Carbon\Carbon;
use Event;
use Corymillz\Adverts\Models\Credit;
use Auth;


class Plugin extends PluginBase
{
    public function registerComponents()
    {

    return [
        'Corymillz\Adverts\Component\StarRating' => 'starrating',
    	'Corymillz\Adverts\Component\PostForm' => 'postform',
        'Corymillz\Adverts\Component\BuyRequest' => 'buyrequest',
        'Corymillz\Adverts\Component\PaymentSetup' => 'paymentsetup',
         'Corymillz\Adverts\Component\PaymentIssue' => 'paymentissue',
         'Corymillz\Adverts\Component\PostEdit' => 'postedit',
         'Corymillz\Adverts\Component\BuyEdit' => 'buyedit',
         'Corymillz\Adverts\Component\PaidBoost' => 'paidboost',
          
         
           
    	

        ];	
    }

    public function registerSettings()
    {
    }

    public function registerMailTemplates(){
        return [

        'corymillz.adverts::mail.message',
        'corymillz.adverts::mail.customermsg',
        'corymillz.adverts::mail.subaccountmsg'

       ];
    }



    public function registerSchedule($schedule)
    {

     
        $schedule->call('Corymillz\Adverts\Component\PaidBoost@onPaidBoostMsb')->daily();
        $schedule->call('Corymillz\Adverts\Component\PaidBoost@onPaidBoostMbb')->cron('0 */12 * * *');
        $schedule->call('Corymillz\Adverts\Component\PaidBoost@onPaidBoostMeb')->cron('0 */6 * * *');
        $schedule->call('Corymillz\Adverts\Component\PaidBoost@onPaidBoostBmsb')->daily();
        $schedule->call('Corymillz\Adverts\Component\PaidBoost@onPaidBoostBmbb')->cron('0 */12 * * *');
        $schedule->call('Corymillz\Adverts\Component\PaidBoost@onPaidBoostBmeb')->cron('0 */6 * * *');

    }



    public function boot()
{
   
         User::extend(function($model){
        $model->hasMany['adverts'] = ['Corymillz\Adverts\Models\Advert'];



    }); 

        User::extend(function($model){
        $model->hasMany['buy'] = ['Corymillz\Adverts\Models\Buy'];

         }); 

          User::extend(function($model){
        $model->hasMany['cat'] = ['Corymillz\Adverts\Models\Cat'];

         }); 

      
        User::extend(function($model){
        $model->morphedByMany['ads'] = ['Corymillz\Adverts\Models\Advert',  'table' => 'corymillz_adverts_favourites', 'name' => 'favourite', 'withPivot' => ['created_at'], 'orderBy'  => 'pivot_created_at desc'];

         }); 


        User::extend(function($model){
        $model->hasOne['credit'] = ['Corymillz\Adverts\Models\Credit', 'key' => 'user_id', 'otherKey' =>'id'];


         }); 


         User::extend(function($model){
        $model->attachOne['store_pic'] = ['System\Models\File'];

         }); 

         
    $this->app['Illuminate\Contracts\Http\Kernel']
            ->pushMiddleware('Corymillz\Adverts\Classes\LastLogin');


}

}

