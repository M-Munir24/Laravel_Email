<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Product;
use App\Mail\HelloMail;
use App\Mail\ProductMail;


class EmailController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function dataEmail()
    {
        $products = product::all();
        return view('data-email', compact('products'));
    }

    public function send(Request $request){
        // Mail::to('muhammadmunir024@gmail.com')->send(new HelloMail());
        Mail::to($request->email)->send(new HelloMail($request->body));
        return back();
    }

    public function sendProductEmail($id){

    $product = Product::findOrfail($id);
    Mail::to($product->customer_email)->send(new ProductMail($product));
    return back();
    }

}
