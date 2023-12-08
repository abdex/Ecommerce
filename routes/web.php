<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    return response('Hello, World!');
});

// Route::get('/products', function(){
//     $allProducts = Product::all();
//     $firstProduct = $allProducts[0];
//     return response($firstProduct->name);
// });

// Route::get('/products/{id}', function(int $id){
//     $newNumber = $id *2;
//     return response($newNumber);
// });

// Route::get('/products/{id}', function(int $id){
//     $product = Product::find($id);
//     if(is_null($product)){
//         return response('This productID is not in the database!');
//     }
//     return response($product->name);
// });

// Route::get('/products', function(Request $request) {
//     $allProducts=Product::all();
//     $firstProduct = $allProducts[0];
//     return response($request->soldOut);
    
// });
// Route::get('products/{product}', 'ProductsController@show');

Route::get('products-page', [ProductController::class, 'getAllProducts']);


// Route::get('/products-page', function() {
//         $allProducts = Product::all();

//         return view('products', [
//             'products'=> $allProducts,
//         ]);
//     });

Route::get('/singleProduct/{id}', [ProductController::class, 'getProduct']);

// Route::get('/singleProduct/{id}', function (int $id, Request $request) {
//     $singleProduct = Product::find($id);
//     if(is_null($singleProduct)){
//         return response('This productID is not in the database!');
//     }
//     // return response($product->name);
//     return view('singleProduct',  [
//         'product'=> $singleProduct
//     ]);
// });

// Route::get('/products/{id}', function(int $id, Request $request) {
//     $instock = $request->instock;
//     $instockProducts = Product::where('instock', $instock);
//     return view('products', ['products' => $instockProducts]);
// });

// Route::post('/products', function(Request $request) {
//     $request->name;
// });