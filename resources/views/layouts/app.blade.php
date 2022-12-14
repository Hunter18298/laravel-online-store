<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title','online Store')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="{{route('home.index')}}">E-commerce</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home.index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('home.about')}}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('product.index') }}">Products</a>

        </li>
      </ul>
      
          <div class="vr bg-white d-none d-block"></div>
          @guest
            <ul>
              <li>
              <a href="{{route('login')}}" class="nav-link">Login</a>
            </li>
          </ul>
            <ul>
              <li>
              <a href="{{route('register')}}" class="nav-link">Register</a>
            </li>
          </ul>
          @else
          <form id='logout' action="{{route('logout')}}" method="POST">
          @csrf
           <ul>
              <li>
              <a role="button" onclick="document.getElementById('logout').submit()" class="nav-link active">Logout</a>
            </li>
          </ul>
          </form>
          @endguest
       
     
    </div>
  </div>
</nav>
<header class="masthead bg-primary text-white text-center py-4">
<div class="container d-flex align-items-center flex-column">
<h2>@yield('subtitle', 'Furniture Online Store')</h2>
</div>
</header>
<!-- header -->
<div class="container my-4">
@yield('content')
</div>

<!-- footer -->
<footer>
  <div class="copyright py-4 text-center text-white">
<div class="container">
<small>
Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
href="https://twitter.com/danielgarax">
Cihan university
</a> - <b>Furniture Shop Project</b>
</small>
</div>
</div>
</footer>
<!-- footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>