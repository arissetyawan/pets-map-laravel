<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('hello', function()
{
	return 'hello';
});


###########################################################


Route::get('pets', function()
     
{ 
   $Latlng = DB::table('pets')->select('Street Address','Name', 'Lat', 'Lng')
                        ->where ('Street Address','like', '%Huntington Beach%')

                         //  ->whereBetween('Lat',array(33.72, 33.83))
                           ->get();
 
return View::make('index', ['pets' => $Latlng]);
});


###########################################################

Route::get('hotels1', function()
     
{ 

	 $Latlng = DB::table('pets')->select('Street Address','Name', 'Lat', 'Lng')
                        ->where ('Street Address','like', '%Huntington Beach%')

                         
                           ->get();
 
return View::make('hotels1', ['pets' => $Latlng]);
});



Route::get('map12', function()
     
{ 

	return View::make('map12');
});

Route::get('map8', function()
     
{ 

	return View::make('map8');
});
    
 ######################################################

Route::get('map7', function()
     
{ 
   $Latlng = DB::table('pets')->select('Name','Street Address', 'Lat', 'Lng')
            ->where ('Street Address','like', '%Huntington Beach%')

           ->get();
 
return View::make('map7', ['pets' => $Latlng]);
});


####################################################################

######################################################

Route::get('petmap', function()
     
{ 
   $Latlng = DB::table('pets')->select('Name','Street Address', 'Lat', 'Lng')
            ->where ('Street Address','like', '%Huntington Beach%')

           ->get();
 
return View::make('petmap', ['pets' => $Latlng]);
});

####################################################################

Route::get('map', function()
     
     
{ 
   $Latlng = DB::table('pets')->select('Name','Street Address', 'Lat', 'Lng')
            ->where ('Street Address','like', '%Huntington Beach%')

           ->get();
 
return View::make('map', ['pets' => $Latlng]);
});

Route::get('search', function()
     
     
{ 
   $Latlng = DB::table('pets')->select('Name','Street Address', 'Lat', 'Lng')
            ->where ('Street Address','like', '%Huntington Beach%')

           ->get();
 
return View::make('search', ['pets' => $Latlng]);
});