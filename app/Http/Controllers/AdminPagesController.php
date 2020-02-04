<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Image;

class AdminPagesController extends Controller
{
    public function index(){
        return view('admin.pages.index');
    }
    public function product_create(){
        return view('admin.pages.product.create');
    }
    public function manage_products(){
        $products = Product::orderBy('id','desc')->get();
        return view('admin.pages.product.index')->with('product',$products);
    }
    public function product_edit($id){
        $product = Product::find($id);
        return view('admin.pages.product.edit')->with('product',$product);
    }
    public function product_store(Request $request){

        $request->validate([
            'title'         => 'required|max:150',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'quantity'         => 'required|numeric'
        ]);
        $product = new Product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;

        $product->slug = $request->title;
        $product->category_id = 2;
        $product->brand_id = 2;
        $product->admin_id = 1;
        $product->save();

        // ProductImage Model insert image

        // if($request->hasFile('product_image')){
        //     // insert that image
        //     $image = $request->file('product_image');
        //     $img = time().'.'.$image->getClientOriginalExtension();
        //     $location = public_path('images/products/'. $img);
        //     Image::make($image)->save($location);

        //     $product_image = new ProductImage;
        //     $product_image->product_id = $product->id;
        //     $product_image->image = $img;
        //     $product_image->save();


        // }
        if(count($request->product_image) > 0){
            foreach($request->product_image as $image){
                // insert that image
                $img = time().'.'.$image->getClientOriginalExtension();
                $location = public_path('images/products/'. $img);
                Image::make($image)->save($location);

                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();


            }
        }

        return redirect()->route('admin.product.create');
    }
    public function product_update(Request $request, $id){

        $request->validate([
            'title'         => 'required|max:150',
            'description'   => 'required',
            'price'         => 'required|numeric',
            'quantity'         => 'required|numeric'
        ]);




        $product = Product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();


        return redirect()->route('admin.products');
    }

}
