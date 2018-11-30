<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{

    public function index()
    {
        $brands=Brand::all();
        return view('admin.pages.brand.index',compact('brands'));
    }

    public function create()
    {
        return view('admin.pages.brand.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:brands,name',
            'img' => 'nullable|image',
        ]);

        if ($request->hasFile('img')){
            $img=$request->file('img');
            $img_name=$img->getClientOriginalName();
            $ext = $request->img->getClientOriginalExtension();
            $img_name=time().'.'.$ext;
            $upload_path_for_img='uploaded_files/brand/';
            $img->move( $upload_path_for_img,$img_name);
        }

        if( Brand::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $img_name,
        ])){
            return redirect('brands')->with('msg','Successfull!');
        }
        return redirect('brand.create');

    }

    public function show($brand)
    {
        $brand=Brand::find($brand);
        return view('admin.pages.brand.show',compact('brand'));
    }

    public function edit($brand)
    {
        $brand=Brand::find($brand);
        return view('admin.pages.brand.edit',compact('brand'));
    }

    public function update(Request $request,$brand)
    {
        $brand=Brand::find($brand);
        $brand->update($request->all());
        return redirect('brands')->with('msg',' Updated Successfully!');
    }

    public function destroy($brand)
    {
        Brand::destroy($brand);
        return redirect('brands')->with('msg','Brand Deleted Successfully !');
    }
}
