<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.pages.product.index', compact('products'));
    }


    public function create()
    {
        return view('admin.pages.product.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'tittle' => 'required|string|max:255',
            'description' => 'nullable',
            'img' => 'nullable|image',
            'price' => 'required|max:255',
        ]);
        $product = new Product;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->tittle = $request->tittle;
        $product->description = $request->description;
        $product->slug = str_slug($request->tittle);
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->offer_price = $request->offer_price;
        $product->save();

        if (count($request->image) > 0) {
            foreach ($request->image as $image) {
//                $image=$request->file('image');
                $img_name=$image->getClientOriginalName();
                $ext =$image->getClientOriginalExtension();
                $img_name=time().'.'.$ext;
                $upload_path_for_img='uploaded_files/product/';
                $image->move( $upload_path_for_img,$img_name);



                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img_name;
                $product_image->save();
            }
        }
        return redirect('products')->with('msg',' Added Successfully!');
    }

    public function show($product)
    {
        $product=Product::find($product);
        return view('admin.pages.product.show',compact('product'));
    }


    public function edit($product)
    {
        $product=Product::find($product);
        return view('admin.pages.product.edit',compact('product'));
    }


    public function update(Request $request,$product)
    {
        $product=Product::find($product);
        $product->update($request->all());
        return redirect('products')->with('msg',' Updated Successfully!');
    }

    public function destroy($product)
    {
        Product::destroy($product);
        return redirect('products')->with('msg','Category Deleted Successfully !');
    }
}
