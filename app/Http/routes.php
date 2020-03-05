<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('Frontend.index');
});

Route::get('/aboutus', function () {
    return view('Frontend.aboutus');
});

Route::get('/enquiry', function () {
    return view('Frontend.enquiry');
});

Route::post('/enquiry', 'PhpmailerController@sendEmail');

Route::get('/aboutproduct', function() {
    return view('Frontend.aboutproduct');
});

Route::get('/animals', function () {
    return view('Frontend.products.animals');
});

Route::get('/others1', function () {
    return view('Frontend.products.others1');
});

Route::get('/buddha', function () {
    return view('Frontend.products.buddha');
});

Route::get('/dattatreya', function () {
    return view('Frontend.products.dattatreya');
});

Route::get('/durgamata', function () {
    return view('Frontend.products.durgamata');
});

Route::get('/ganeshji', function () {
    return view('Frontend.products.ganeshji');
});

Route::get('/hanumanji', function () {
    return view('Frontend.products.hanumanji');
});

Route::get('/humanstatues', function () {
    return view('Frontend.products.humanstatues');
});

Route::get('/laxmimata', function () {
    return view('Frontend.products.laxmimata');
});

Route::get('/navnath', function () {
    return view('Frontend.products.navnath');
});

Route::get('/others', function () {
    return view('Frontend.products.others');
});

Route::get('/radhakrishna', function () {
    return view('Frontend.products.radhakrishna');
});

Route::get('/ramdarbar', function () {
    return view('Frontend.products.ramdarbar');
});

Route::get('/saibaba', function () {
    return view('Frontend.products.saibaba');
});

Route::get('/saraswatima', function () {
    return view('Frontend.products.saraswatima');
});

Route::get('/shivparivar', function () {
    return view('Frontend.products.shivparivar');
});

Route::get('/shivji', function () {
    return view('Frontend.products.shivji');
});

Route::get('/vishnuji', function () {
    return view('Frontend.products.vishnuji');
});

Route::get('/antique', function () {
    return view('Frontend.products.antique');
});

Route::get('/patmoorti', function () {
    return view('Frontend.products.patmoorti');
});

Route::get('/temples', function () {
    return view('Frontend.products.temples');
});

Route::get('/dhashavatar', function () {
    return view('Frontend.products.dhashavatar');
});

Route::get('/jesus', function () {
    return view('Frontend.products.jesus');
});

Route::get('/southindian', function () {
    return view('Frontend.products.southindian');
});