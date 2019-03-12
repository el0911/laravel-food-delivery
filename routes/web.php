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
    $allfood = DB::select('select * from food where  ?', [1]);
    $allcat = DB::select('select * from cat where  ?', [1]);
    // dd($allfood);
    return view('home')->with(compact('allcat'))->with(compact($allfood));
});

Route::get('item/{id}', function ($id) {
    $item = DB::select('select * from food where id = ?', [$id])[0];
    
    return view('item')->with(compact('item'));
});


Route::get('bycat/{name}', function ($name) {
    $items = DB::select('select * from food where cat_id = ?', [$name]);
    $sitems = DB::select('select * from food where ? LIMIT 4' , [1]);

    $allcat = DB::select('select * from cat where ?' , [1]);
    return view('gallary')->with(compact('items'))->with(compact('name'))->with(compact('sitems'))->with(compact('allcat'));
});


Route::get('addtocart/{id}',function($id){
    DB::insert('insert into cart (`food_id`, `quantity`, `user_id`) values (?,?, ?)', [$id,1, Auth::user()->id]);

    return Redirect::back()->withErrors(['msg', 'The Message']);

})->middleware('auth');



Route::get('cartdel/{id}', function ($id) {
    DB::delete('DELETE FROM cart where id = ?', [$id]);
    return Redirect::back()->withErrors(['msg', 'The Message']);
});

Route::get('/cart',function( ){
    $items = DB::select('SELECT * FROM `cart` JOIN food on cart.food_id = food.id WHERE user_id = ?  ', [Auth::user()->id]);
    return view('cart')->with(compact(('items')));
})->middleware('auth');



Route::get('/cart/clear',function( ){
    DB::delete('DELETE FROM  cart where user_id = ?', [Auth::user()->id]);
    return Redirect::back()->withErrors(['msg', 'The Message']);

})->middleware('auth');



Route::get('gallery/{name}', function ($name) {
    $items = DB::select('select * from food where name like "%'.$name.'%"', [$name]);
    $sitems = DB::select('select * from food where ? LIMIT 4' , [1]);

    $allcat = DB::select('select * from cat where ?' , [1]);
    return view('gallary')->with(compact('items'))->with(compact('name'))->with(compact('sitems'))->with(compact('allcat'));
});

Auth::routes();

Route::get('/home', function () {
    $allfood = DB::select('select * from food where  ?', [1]);
    $allcat = DB::select('select * from cat where  ?', [1]);
    // dd($allfood);
    return view('home')->with(compact('allcat'))->with(compact($allfood));
})->name('home');

Auth::routes();

 