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
            'name' => $requst->input(''),
            'price' => $requst->input(''),
            'quantity' => $requst->input('')
        ]);

        $products = Product::all();
        return view('productlist',['products' => $products],['Product Added Sussessfuly!']);
    }

    public function EditProduct(Request $requst) {
        $product = Product::findorfail();

        $products = Product::all();
        return view('productlist',['products' => $products],['Product Edited Sussessfuly!']);
    }

    public function DeleteProduct(Request $requst){
        $product = Product::findorfail();

        $products = Product::all();
        return view('productlist',['products' => $products],['Product Deleted Sussessfuly!']);
    }
}
