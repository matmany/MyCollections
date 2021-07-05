<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\User;

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

/*-----Categois-----*/
// get all
// create
// delete
// get single
// update
//IDUSER: 1

/*-----Lista--------*/
// get all
// create
// delete
// get single
// update
// get same ID-Category 

/*-----Tags--------*/
// get all
// create
// delete
// get single
// update

/*-----Itens--------*/
// get all
// create
// delete
// get single
// update
// get same ID-list
// get same ID-tag ???
// get specific order???

// need Database and migrations
// model
// service   
// controler, get get info
// return de info


Route::get('/testing-the-api', function(){
    return['message'=>'hello'];
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
