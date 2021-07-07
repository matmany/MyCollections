<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TypeController;
use App\Models\Category;
use App\Models\Collection;

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

Route::apiResources([
    'categories' => CategoryController::class,
    'collections'=> CollectionController::class,
    'itens'=> ItemController::class,
    'tags'=>TagController::class,
    'types'=>TypeController::class,
]);

Route::get('/categories/{category}/collections',[CategoryController::class,'collections']);

Route::get('/collections/{collection}/itens',[CollectionController::class,'itens']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
