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
                <h4 class="card-title">Category form</h4>
                <p class="card-description">
                   Add Category
                </p>
                {!! Form::open(['class'=>'forms-sample','route'=>'categories.store','method' => 'post','enctype'=>'multipart/form-data']) !!}
                @csrf
                    <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                        @if($errors->has('name'))
                            <span class="alert-danger">
                            {{ $errors->first('name') }}
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" name="description" id="exampleTextarea1" rows="2"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Image</label>
                        <input type="file" name="img" class="input-group" id="exampleInputName1" placeholder="Name">
                        @if($errors->has('img'))
                            <span class="alert-danger">
                            {{ $errors->first('img') }}
                        </span>
                        @endif
                    </div>
                <div class="form-group">
                    <label for="brand">Parent Category</label>
                    <select name="parent_id" class="form-control" id="brand">
                        @php
                            $categories=\App\Category::select('id','name')->where('parent_id',NULL)->get();
                        @endphp
                        <option value>Select Category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    @endsection