<?php
//use Cart;
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
    $cart= Cart::content()->count();
    $cat = DB::table('categories')->get();
    $detcat= DB::table('detailcategorys')->get();
    $items =DB::table('items')
          ->join('detailcategorys','detailcategorys.id','=','items.detailcategorys_id')

          ->join('categories','categories.id','=','detailcategorys.categories_id')
          ->join('brands','brands.id','=','items.brands_id')
          ->select('items.id','item_name','images','imagesback','price','minimumorder','categories_id')
          ->get();
//    return $items;
//    return $items;
//    return $cat;
    return view('index',compact('cat','detcat','items','cart'));
});


Auth::routes();
Route::get('/about',function (){
    return view('about');

});

Route::get('/home', 'HomeController@index');
Route::get('/detail/{id}','MainController@detail');
Route::post('savecart/','MainController@savecart');
Route::get('cart/','MainController@cart');
Route::post('updatecart/','MainController@updatecart');
Route::post('checkout/','HomeController@checkout');

Route::get('demo/','MainController@demo');
