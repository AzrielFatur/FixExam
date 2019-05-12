<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $datapt = DB::table('datapt')->get();
    $about = DB::table('about')->get();
    $service = DB::table('service')->get();
    $gallery = DB::table('gallery')->get();
    return view('awal',['service' =>$service,
                        'datapt' =>$datapt,
                        'about' =>$about,
                        'gallery' =>$gallery
                        ]);    
});


Route::get('/service','ServiceController@index');

Route::get('/service/ubah/{id}','ServiceController@ubah');


Route::post('/service/update','ServiceController@update');

Route::post('/service/updatedatapt','ServiceController@updatedatapt');

Route::post('/service/updateabout','ServiceController@updateabout');

Route::post('/service/updategallery','ServiceController@updategallery');


Route::get('/myabout','ServiceController@myabout');


Route::get('/gallery','ServiceController@gallery');


Route::get('/gallery/ubahgallery/{id}','ServiceController@ubahgallery');



Route::get('/data','ServiceController@datapt');

Route::get('/data/ubahdatapt/{id}','ServiceController@ubahdatapt');



Route::get('/about','ServiceController@about');

Route::get('/about/ubahabout/{id}','ServiceController@ubahabout');











Route::get('/service/tambah','ServiceController@tambah');

Route::post('/service/store','ServiceController@store');

Route::get('/service/hapus/{id}','ServiceController@hapus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
