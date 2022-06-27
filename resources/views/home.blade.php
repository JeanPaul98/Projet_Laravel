<!doctype html>
<html lang="en">
  <head>
        <meta charset="utf-8">
        <title>Mon T-shirt</title>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" >
         <!-- fontawesome -->
        <link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
        <!-- Favicons -->
        <link rel="icon" href="{{asset('img/favicon.png')}}">
        <link rel="icon" href="{{asset('css/styles.css')}}">
        <meta name="theme-color" content="#7952b3">
        <!-- Custom styles for this template -->
        <link href="{{asset('css/album.css')}}" rel="stylesheet">
        <link href="{{asset('css/tshirt.css')}}" rel="stylesheet">


  </head>
  <body>


@include('layout.header')

<main>
  <section class="py-5 text-center container">
      <div class="container"> 
          <h1 class="jumbotron-heading">Comandez votre <br><span class="badge badge-light">Nouveau</span><br>T-shirt</h1>
          <p class="lead text-muted">Denichez THE T-Shirt de votre choix, fimls préfere(e).</p>
      </div>
  </section>
   @yield('content')
</main>
<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Mon T-Shirt</p>
    </div>
</footer>

    <script src="{{('js/jquery-1.10.2.js')}}"></script>
    <script src="{{('js/popper.min.js')}}"></script>
    <script src="{{('js/bootstrap.min.js')}}"></script>
    <script src="{{('js/holder.min.js')}}"></script>
  </body>
</html>
