<?php

use Illuminate\Http\Request;
use App\Session;
use App\Http\Resources\SessionResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/session', function () {
//     return new SessionResource(Session->all);
// });

// Route::resource('session', 'SessionController');



// Route::post('session', function(Request $request) {
//     return Session::create($request->all);
// });

// Route::get('/session', function () {
//     return new SessionResource(Session::find(1));
// });



Route::group(['prefix' => 'gym'], function(){

    Route::get('/', 'GymController@index');
    Route::get('/{id}', 'GymController@getTrainer');

});

Route::group(['prefix' => 'workout'], function (){

    Route::get('/', 'WorkoutController@index');

});
Route::group(['prefix' => 'trainer'], function(){

    Route::get('/', 'TrainerController@index');
    Route::get('/{id}', 'TrainerController@singleTrainer');

});

Route::group(['prefix' => 'session'], function (){

    // Route::get('/{user_id}', 'SessionController@userSessions');
    Route::post('/add', 'SessionController@createSession');

});
