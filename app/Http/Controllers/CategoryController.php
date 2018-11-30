<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $categories=Category::all();
        return view('admin.pages.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.category.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255|unique:categories,name',
            'img' => 'nullable|image',
        ]);

        if ($request->hasFile('img')){
            $img=$request->file('img');
            $img_name=$img->getClientOriginalName();
            $ext = $request->img->getClientOriginalExtension();
            $img_name=time().'.'.$ext;
            $upload_path_for_img='uploaded_files/category/';
            $img->move( $upload_path_for_img,$img_name);
        }

        if( Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'img' => $img_name,
            'parent_id' => $request->parent_id,
        ])){
            return redirect('categories')->with('msg','Successfull!');
        }
        return redirect('categories.create');
    }

    public function show($category)
    {
        $category=Category::find($category);
        return view('admin.pages.category.show',compact('category'));
    }

    public function edit($category)
    {
        $category=Category::find($category);
        return view('admin.pages.category.edit',compact('category'));
    }

    public function update(Request $request,$category)
    {
        $category=Category::find($category);
        $category->update($request->all());
        return redirect('categories')->with('msg',' Updated Successfully!');
    }

    public function destroy($category)
    {
        Category::destroy($category);
        return redirect('categories')->with('msg','Category Deleted Successfully !');
    }
}
