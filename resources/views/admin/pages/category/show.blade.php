@extends("admin.admin_master")
@section('stylesheets')
@endsection
@section('content')
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Brand Details</h4>
                <p class="card-description">
                    Use class
                    <code>.text-primary</code>,
                    <code>.text-secondary</code> etc. for text in theme colors
                </p>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-primary">{{$category->name}}</p>
                        <p class="text-success">{{$category->description}}</p>
                        <p class="text-danger">.text-danger</p>
                        <p class="text-warning">.text-warning</p>
                        <p class="text-info">.text-info</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection