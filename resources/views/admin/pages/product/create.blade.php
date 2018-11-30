@extends("admin.admin_master")
@section('stylesheets')
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/vendors/icheck/skins/all.css')}}">
    <!-- End plugin css for this page -->
    @endsection
@section('content')
    <div class="col-md-8 grid-margin stretch-card offset-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product form</h4>
                <p class="card-description">
                   Add Product
                </p>
                {!! Form::open(['class'=>'forms-sample','route'=>'products.store','method' => 'post','enctype'=>'multipart/form-data']) !!}
                @csrf
                <div class="form-group">
                    <label for="category">Category select</label>
                    <select name="category_id" class="form-control" id="category">
                        @php
                            $categories=\App\Category::all();
                        @endphp
                        <option value>Select Category</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="brand">Brand select</label>
                    <select name="brand_id" class="form-control" id="brand">
                        @php
                            $brands=\App\Brand::all();
                        @endphp
                        <option value>Select Brand</option>
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                            @endforeach
                    </select>
                </div>

                    <div class="form-group">
                        <label for="exampleInputName1">product Tittle</label>
                        <input type="text" name="tittle" class="form-control" id="exampleInputName1" placeholder="product Tittle">
                        @if($errors->has('tittle'))
                            <span class="alert-danger">
                            {{ $errors->first('tittle') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">product Description</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="2"></textarea>
                        @if($errors->has('description'))
                            <span class="alert-danger">
                            {{ $errors->first('description') }}
                        </span>
                        @endif
                    </div>
                <div class="form-group">
                    <label for="exampleInputName1">product Quantity</label>
                    <input type="text" name="quantity" class="form-control" id="exampleInputName1" placeholder="product Quantity">
                    @if($errors->has('quantity'))
                        <span class="alert-danger">
                            {{ $errors->first('quantity') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">product price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputName1" placeholder="product price">
                    @if($errors->has('price'))
                        <span class="alert-danger">
                            {{ $errors->first('price') }}
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">product Offer price</label>
                    <input type="text" name="offer_price" class="form-control" id="exampleInputName1" placeholder="product Offer price">
                    @if($errors->has('offer_price'))
                        <span class="alert-danger">
                            {{ $errors->first('offer_price') }}
                        </span>
                    @endif
                </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Image</label>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="file" name="image[]" class="input-group" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image[]" class="input-group" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image[]" class="input-group" id="exampleInputName1" placeholder="Name">
                            </div>
                            <div class="col-md-6">
                                <input type="file" name="image[]" class="input-group" id="exampleInputName1" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    @endsection