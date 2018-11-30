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
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td class="py-1">
                                @foreach($product->images as $images)
                                <img src="uploaded_files/product/{{$images->image}}" alt="image" />
                                    @endforeach
                            </td>
                            <td>
                                {{$product->tittle}}
                            </td>
                            <td>
                                {{$product->description}}
                            </td>
                            <td>
<a class="btn btn-inverse-primary btn-fw" href="{{route('products.edit',$product->id)}}">Edit</a>
<a class="btn btn-inverse-primary btn-fw" href="{{route('products.show',$product->id)}}">Show</a>

                                <form action="{{route('products.destroy',$product->id)}}" method="post">
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