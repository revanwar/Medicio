<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Catgory;
use App\Models\Product;
use App\Models\Cart;

// Breakdown Demo test please

class HomeCotroller extends Controller
{

    public function index()
    {
        $product = Product::with('catgories')->paginate(10);
        //dd($product);
        return view('landing.home',compact('product'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype == 1)
        {
            return view('admin.home');
        }
        else
        {
            $product = Product::with('catgories')->paginate(10);
            //dd($product);
            return view('landing.home',compact('product'));
        }

    }

    public function product_details($id)
    {
        $product = Product::with('catgories')->where('products.id','=',$id)->get();
        //$catagory = Catgory::all();
        //dd($product);
        return view('landing.productdetails',compact('product'));   
    }

    public function add_cart(Request $request, $id)
    {
        if(Auth::id()){
            $user = Auth::user();
            $product = Product::with('catgories')->where('products.id','=',$id)->get();
            //dd($product);
            $cart = new Cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->product_id = $product[0]->id;
            $cart->product_title = $product[0]->title;
            
            $cart->price = $product[0]->price;
            $cart->image = $product[0]->image;
            $cart->quantity = 1;
            $cart->save();
            return redirect('/');

        }else{
            return redirect('login');
        }
          
    }
}
