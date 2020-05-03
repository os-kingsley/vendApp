<?php namespace Corymillz\Adverts\Component;



use Cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Corymillz\Adverts\Models\Advert;
use Flash;
use ValidationException;
use Corymillz\Adverts\Models\Cat;
use System\Models\File;
use Auth;
use Request;



class PostEdit extends ComponentBase
{





     public function componentDetails(){
        return [
            'name' => 'Post Edit Form',
            'description' => 'Edit Adverts'
        ];
    }




    public function onSubmit(){
 
    	$data = post();

      $rules = [

        'title' => 'required|min:4',
        'cats'  => 'required',
        'price' => 'required_without:contact',
        'contact' => 'required_without:price',
        'delivery' => 'required',
        'description' => 'required',
         'location' => 'required',
         
         
         
            ];

      $messages = [
    'title.required|min:4' => 'The title field is required',
    'cats.required' => 'The Category and Subcategory fields are required',
    'price.required_without:contact' => 'Enter Price or contact field',
    'contact.required_without:contact' => 'Enter Price or contact field',
    'delivery.required' => 'The delivery field is required',
    'description' => 'The description feild is required',
    'location.required' => 'The location feild is required',
];




    	$validation = Validator::make($data, $rules, $messages);

    	if ($validation->fails()) {
        throw new ValidationException($validation);

    } else {
         $id = post('record');

       $advert = Advert::find($id);
       $advert->title = Input::get('title');
      // $advert->slug = str_slug(Input::get('title'));
       $advert->description = Input::get('description');
       $advert->price = Input::get('price');
       $advert->minimum_order = Input::get('minimum_order');
       $advert->spec_name = Input::get('spec_name');
       $advert->spec_detail = Input::get('spec_detail');
       $advert->supply_ability = Input::get('supply_ability'); 
       $advert->discount_offer = Input::get('discount_offer');
       $advert->delivery =  Input::get('delivery');
       $advert->delivery_time = Input::get('delivery_time');
       $advert->cats = Input::get('cats');
       $advert->location = Input::get('location');
      
       $advert->user_id = Auth::getUser()->id;
  


  

       $advert->save();
       $advert->slug = str_slug($advert->title).'-'.$advert->id; $advert->save();
       Flash::success('Post Updated!');
       //return Redirect::to("product-single" , array($redirectSlug));
         $redirectSlug =  'product-single/'.str_slug($advert->title).'-'.$advert->id;
       return Redirect::to($redirectSlug);
     
    }


}


}


//Incorrect404 - medium mysql
//Incorrect404@ - phpadmin
//usergroup -
//paraphrase - newpassword404
//newuser404 - user
 // GRANT ALL ON vend_database.* TO 'venduser'@'localhost' IDENTIFIED BY 'Incorrect404@';
///usr/local/bin/

//mysql -u cory -p vend_database < /db_vend.sql
//mysql -u root -p vend_database < /db_vend.sql

/**

server {
        root /var/www/html/vendApplication/vendApplication/public;
        index index.php index.html index.htm index.nginx-debian.html;
        server_name vend.com.ng www.vend.com.ng;

        location / {
                try_files $uri $uri/ =404;
        }

        location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
        }

        location ~ /\.ht {
                deny all;
        }



* * * * * php /var/www/html/vendApp/artisan schedule:run 1>> /dev/null 2>&1



b1970e6dc72b158683efc51a2b6b9794-0a4b0c40-09a70ac8

f9a3f9dd205309e3f9526af3fa5e9443-9dfbeecd-6db58cc8

sql_mode = "NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION"




  location ~ \.php$ {
                include snippets/fastcgi-php.conf;
                fastcgi_pass unix:/var/run/php/php7.2-fpm.sock;
        }


 sudo cp /var/www/html/vendApplication/vendApplication/index.php /var/html/vendApplication/vendApplication/public
sudo nano index.php


k1._domainkey.vend.com.ng.vend.com.ng


listen 80;
        server_name vend.com.ng www.vend.com.ng;
    return 404; # managed by Certbot



sudo chown -R www-data.www-data /var/www/html/vendApplication/vendApplication/storage
sudo chgrp -R www-data /var/www/html/vendApplication/vendApplication/storage


sudo chown www-data -R /var/www/html/vendApplication/vendApplication/storage/app

**/