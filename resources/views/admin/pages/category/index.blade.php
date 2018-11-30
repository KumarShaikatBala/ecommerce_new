@extends("admin.admin_master")
@section('stylesheets')
    @endsection
@section('content')

    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Brand List</h4>
                <p class="card-description">

                @if(Session::has('msg'))
                    <h1 class="text-center alert-warning" id="msg">{{session::get('msg')}}</h1>
                @endif
                <script>
                    setTimeout(function() {
                        $('#msg').fadeOut('fast');
                    }, 2000);
                </script>
                </p>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Category Img
                            </th>
                            <th>
                                Category name
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Parent
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr>
                            <td class="py-1">
                                <img src="uploaded_files/category/{{$category->img}}" alt="image" />
                            </td>
                            <td>
                                {{$category->name}}
                            </td>
                            <td>
                                {{$category->description}}
                            </td>
                            <td>
                                @if($category->parent_id==NULL)
                                    Main Category/primary
                                    @else
                                {{--{{$category->parent}}--}}
                                {{$category->parent->name}}
                                    @endif
                            </td>
                            <td>
<a class="btn btn-inverse-primary btn-fw" href="{{route('categories.edit',$category->id)}}">Edit</a>
<a class="btn btn-inverse-primary btn-fw" href="{{route('categories.show',$category->id)}}">Show</a>

                                <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
<button type="submit" class="btn btn-inverse-danger btn-fw">Delete</button>
                                </form>
                            </td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection