<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>KOPPEE - Coffee Shop HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('public/Fontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/Fontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('public/Fontend/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
@include('User.Customers.Managers.Layouts.Nav.index')
@include('User.Customers.Managers.Layouts.Carousel.index')
@yield('Pages')
@include('User.Customers.Managers.Layouts.Footer.index')
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('public/Fontend/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('public/Fontend/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('public/Fontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/Fontend/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{asset('public/Fontend/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{asset('public/Fontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('public/Fontend/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('public/Fontend/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('public/Fontend/js/main.js')}}"></script>
</body>

</html>