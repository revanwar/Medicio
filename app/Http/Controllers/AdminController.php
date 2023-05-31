<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Catgory;

use App\Models\Product;

// This is my admin controller
// New demo style

class AdminController extends Controller
{
    public function catagory()
    {
        $catagory = Catgory::all();
        //echo "M"
        return view('admin.catagory',compact('catagory'));
    }

    public function add_catagory(Request $request)
    {
        $data = new Catgory;
        $data->catgories_name = $request->catagory;
        $data->save();
        return redirect()->back();      
    }

    public function delete_catogories($id)
    {
        $data = Catgory::find($id);
        $data->delete();
        return redirect()->back();   
    }

    public function product()
    {
        $catagory = Catgory::all();
        //echo "M"
        return view('admin.addproduct',compact('catagory'));
    }

    public function add_product(Request $request)
    {
        $product = new Product;
        //$product = $request->all();
        //dd($product);
        $product->title = $request->product;
        $product->catagory = $request->catagory;
        $product->description = $request->product_description;
        $product_image = $request->product_image;
        $product_imageName = time().'_'.$product_image->getClientOriginalName();
        $request->product_image->move('product1',$product_imageName);
        $product->image = $product_imageName;
        $product->quantity = $request->product_quantity;
        $product->price = $request->product_price;
        $product->discunt_price = $request->dis_price;
        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');      
    }

    public function show_product()
    {
        $product = Product::with('catgories')->get();
        //dd($product);
        return view('admin.showproduct',compact('product'));
    }

    public function delete_product($id)
    {
        $data = Product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product deleted Successfully');;   
    }

    public function edit_product($id)
    {
        $product = Product::with('catgories')->where('products.id','=',$id)->get();
        $catagory = Catgory::all();
        //dd($product);
        return view('admin.editproduct',compact(['catagory', 'product']));   
    }

    public function update_product(Request $request)
    {
        $product = Product::find($request->product_id);
        //$product = $request->all();
        //dd($product);

        $product->title = $request->product;
        $product->catagory = $request->catagory;
        $product->description = $request->product_description;
        
        $product_image = $request->product_image;
        if($product_image){
        $product_imageName = time().'_'.$product_image->getClientOriginalName();
        $request->product_image->move('product1',$product_imageName);
        $product->image = $product_imageName;
        }
        $product->quantity = $request->product_quantity;
        $product->price = $request->product_price;
        $product->discunt_price = $request->dis_price;
        $product->save();
        return redirect()->back()->with('message','Product Updated Successfully');      
    }
}
