<?php

use Illuminate\Support\Facades\Route;
use App\Models\user;

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

// Route::get('/', function () {
//     // $user = user::all();
//     try{
//         $app123 = new App\Models\user();
//         $app123->where('u_id',2)->update(['u_password'=>'888888']);
//     }catch (\Exception $e){
//         echo 'Caught exception: ',  $e->getMessage(),'<br>';  
//     }
// });
// Route::get('/', function () {
    
// });
Route::view('/','main');
Route::group(['prefix' => 'guestlist'], function () {
    Route::get('/data','indexcontroller@getdata');
});