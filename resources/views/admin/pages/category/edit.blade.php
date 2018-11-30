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
                <h4 class="card-title">Basic form</h4>
                <p class="card-description">
                    Basic form elements
                </p>
                <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                {!! method_field('PUT') !!}
                <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" value="{{$category->name}}" name="name" class="form-control" id="exampleInputName1" placeholder="Name">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Textarea</label>
                    <textarea class="form-control" name="description" id="exampleTextarea1" rows="2">{{$category->description}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Image</label>
                    <input type="file" name="img" class="input-group" id="exampleInputName1" placeholder="Name">
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>


@endsection