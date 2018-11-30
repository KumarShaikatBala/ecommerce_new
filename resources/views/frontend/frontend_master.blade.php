<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/css/shop-homepage.css')}}" rel="stylesheet">
    @yield('stylesheets')
</head>

<body>

@include('frontend.partials_include._navbar')

<!-- Page Content -->
<div class="container">

    <div class="row">

@include('frontend.partials_include._sidemenu')

       @yield('content')

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@include('frontend.partials_include._footer')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@yield('scripts')
</body>

</html>
