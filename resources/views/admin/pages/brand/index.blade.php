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
                                Brand Img
                            </th>
                            <th>
                                Brand name
                            </th>
                            <th>
                                Description
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($brands as $brand)
                        <tr>
                            <td class="py-1">
                                <img src="uploaded_files/brand/{{$brand->img}}" alt="image" />
                            </td>
                            <td>
                                {{$brand->name}}
                            </td>
                            <td>
                                {{$brand->description}}
                            </td>
                            <td>
<a class="btn btn-inverse-primary btn-fw" href="{{route('brands.edit',$brand->id)}}">Edit</a>
<a class="btn btn-inverse-primary btn-fw" href="{{route('brands.show',$brand->id)}}">Show</a>

                                <form action="{{route('brands.destroy',$brand->id)}}" method="post">
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