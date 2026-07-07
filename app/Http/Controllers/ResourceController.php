<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('productlist',['products' => $products]);
    }

    public function CreateProduct (Request $requst){
        Product::create([
            'name' => $requst->input('name'),
            'price' => $requst->input('price'),
            'quantity' => $requst->input('quantity')
        ]);

        $products = Product::all();
        return view('productlist',['products' => $products]);
    }

    public function EditProduct($id,Request $request) {
        $product = Product::findorfail($id);

        $product->update([
        'name' => $request->input('name'),
        'price' => $request->input('price'),
        'quantity' => $request->input('quantity')
        ]);

        $products = Product::all();
        return view('productlist',['products' => $products]);
    }

    public function ShowEditForm($id) {
        $product = Product::findOrFail($id);
        return view('editproduct', ['product' => $product]);
    }

    public function DeleteProduct($id){
        Product::destroy($id);

        $products = Product::all();
        return view('productlist',['products' => $products]);
    }

}
