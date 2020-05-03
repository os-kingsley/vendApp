<?php namespace Corymillz\Store;

use System\Classes\PluginBase;
use RainLab\User\Controllers\Users as UsersController;
use RainLab\User\Models\User as UserModel;

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

       UserModel::extend(function($model){
        
        $model->addFillable([
          
          'store_title',
          'store_description',
          'background_color',
          'font_color',
          'font_family',
          'show_icon',
          'store_description_font_style',
          'store_description_font_color',
          'about_us',
          'payment_id',
          'trust_badge',
          'slug',
          'company',
          'phone',
          'street_addr'
            






        ]);

      });

      

       UsersController::extendFormFields(function($form, $model, $context){
        if ($model instanceof \RainLab\User\Controllers\Users) 
          return;
          $form->addTabFields([

   
            'store_title' => [

              'label' => 'Store Title',
              'type' => 'text',
              'tab' => 'Store'
          ],
           'store_description' => [

              'label' => 'Store Description',
              'type' => 'textarea',
              'tab' => 'Store'
          ],

           'background_color' => [

              'label' => 'Background Color',
              'type' => 'text',
              'tab' => 'Store'
          ],


           'font_color' => [

              'label' => 'Font Color',
              'type' => 'text',
              'tab' => 'Store'
          ],


           'font_family' => [

              'label' => 'Font Family',
              'type' => 'text',
              'tab' => 'Store'
          ],

             'show_icon' => [

              'label' => 'Show Icon',
              'type' => 'text',
              'tab' => 'Store'
          ],

            'store_description_font_style' => [

              'label' => 'Description Font Style',
              'type' => 'text',
              'tab' => 'Store'
          ],

            'store_description_font_color' => [

              'label' => 'Description Font Color',
              'type' => 'text',
              'tab' => 'Store'
          ],


            'about_us' => [

              'label' => 'About Us',
              'type' => 'text',
              'tab' => 'Store'
          ],


            'payment_id' => [

              'label' => 'Payment Id',
              'type' => 'text',
              'tab' => 'Store'
          ],


            'trust_badge' => [

              'label' => 'Trust Badge',
              'type' => 'text',
              'tab' => 'Store'
          ],

           'slug' => [

              'label' => 'User Slug',
              'tab' => 'Store',
              'preset'    => [
                         'field' => 'company',
                         'type' => 'slug'
                     ]
          ],


           'company' => [

              'label' => 'Company',
              'type' => 'text',
              'tab' => 'Profile'
          ],

           'phone' => [

              'label' => 'Phone',
              'type' => 'text',
              'tab' => 'Profile'
          ],

           'street_addr' => [

              'label' => 'Address',
              'type' => 'text',
              'tab' => 'Profile'
          ],




         
         
         
         



           







          ]);
        
       });

    }
}




/**
	'store_title' => [

          		'label' => 'Store Title',
          		'type' => 'string'
          		'tab' => 'Store'


          	],


          	 	'store_description' => [

          		'label' => 'Store Description',
          		'type' => 'text'
          		'tab' => 'Store'


          	],

          	 	'background_color' => [

          		'label' => 'Background Color',
          		'type' => 'string'
          		'tab' => 'Store'


          	],


          	 	'font_color' => [

          		'label' => 'font_color',
          		'type' => 'string'
          		'tab' => 'Store'


          	],

          	 	'font_family' => [

          		'label' => 'Font Family',
          		'type' => 'string'
          		'tab' => 'Store'


          	],

**/
