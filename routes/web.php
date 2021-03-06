
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


Route::prefix('/')->group(base_path('routes/client.php'));



//Email verification
Route::get('/verifyemail/{email}/{token}','Auth\RegisterController@verifyemail')->name('auth.verifyemail');


//Default theme Route file
//Route::prefix('/')->group(base_path('routes/default.php'));

//Paytm callback action
//Route::post('/payment/paytm/status', 'Admin\PaytmWalletController@paymentCallback')->name('payment.paytm.status');

//Auto Deploy from github push
Route::post('/deploy/github-notify', 'Admin\GithubDeployController@notify')->name('git.notify');
Route::post('/deploy/github-pull', 'Admin\GithubDeployController@deploy')->name('git.deploy');
Route::post('/deploy/github', 'Admin\GithubDeployController@github')->name('git.deploys');

//Test Routes
Route::prefix('/test')->group(base_path('routes/test.php'));

//Auth Route
Auth::routes();

//Route::get('/logged-in-devices', 'Admin\LoggedInDeviceManager@index')->name('logged-in-devices.list')->middleware('auth');
//Route::get('/logout/all', 'Admin\LoggedInDeviceManager@logoutAllDevices')->name('logged-in-devices.logoutAll')->middleware('auth');
//Route::get('/logout/{device_id}', 'Admin\LoggedInDeviceManager@logoutDevice')->name('logged-in-devices.logoutSpecific')->middleware('auth');

//Admin route
Route::prefix('/appadmin')->middleware(['auth','checkstatus'])->group(base_path('routes/admin.php'));

//Digishop theme route file
//Route::prefix('/digishop')->group(base_path('routes/digishop.php'));

//Digilearn
//Route::prefix('/digilearn')->group(base_path('routes/digilearn.php'));

//Matrimony
//Route::prefix('/matrimony')->group(base_path('routes/matrimony.php'));

