
<?php
Route::group(['namespace' => 'Samuelayo\Contactform\Http\Controllers'], function(){
    Route::get('contact', 'ContactFormController@index');
    Route::post('contact', 'ContactFormController@sendMail')->name('contact');
});