<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">

      <title>@yield('title')</title>
      
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="/img/udyog_logo.png">
      <!-- Bootstrap core CSS-->
      <!-- Custom styles for this template-->
      <link href="/css/app.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css">
   </head>
   <body id="page-top">

      <!-- TOP NAV BAR -->
      
     @include('layout.nav')

      <!-- TOP NAV BAR END -->


      @yield('content')


      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a>
      <!-- Logout Modal-->
      <!-- Bootstrap core JavaScript-->
     
      <script type="text/javascript" src="/js/app.js"></script>
   </body>

</html>