<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $allProducts = Product::all();

        return view('products', [
            'products'=> $allProducts]);
    }

    public function getProduct(int $id)
    {
        $singleProduct = Product::find($id);
        if(is_null($singleProduct)){
        return response('This productID is not in the database!');
    }
        return view('singleProduct',  [
        'product'=> $singleProduct
        ]);
    }
}

