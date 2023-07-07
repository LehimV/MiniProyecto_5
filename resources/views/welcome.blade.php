<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <!-- Styles -->

</head>

<body>
  <nav class="navbar bg-dark navbar-expand-lg navbar-custom mb-4" data-bs-theme="dark"">
    <div class=" container px-5">
    <a class="navbar-brand p-0 m-0" href="#">
      <img src="../small_logo-03-white.svg" alt="ULogo" width="70" height="70">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    @if (Route::has('login'))
    <div class=" collapse navbar-collapse " id=" navbarResponsive">
      @auth
      <ul class=" navbar-nav  ">
        <li><a href=" {{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</li></a>
        @else
        <li class="nav-item"><a href="{{ route('login') }}" class="btn btn-light">Log in</a></li>

        @if (Route::has('register'))
        <li class="nav-item"><a href="{{ route('register') }}" class="btn btn-outline-light">Register</a></li>
        @endif
        @endauth
      </ul>
    </div>
    @endif
    </div>
  </nav>

  <div class="masthead text-center text-white mt-5">
    <div class="img-container  mb-3">
      <img src="../U-Logo.svg" class="card-img-top" style="width: 20rem;" alt="">
    </div>
    <div class="">
      <div class="container px-5">
        <h1 class="text-info fw-bold">One Page Wonder</h1>
        <h2 class="text-info fw-bold">Will Rock Your Socks Off</h2>
      </div>
    </div>
  </div>
  <!-- Content section 1-->
  <section id="scroll">
    <div class="container px-5">
      <div class="row gx-5 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5"><img class="img-fluid rounded-5 img-thumbnail" src="https://images.pexels.com/photos/5217444/pexels-photo-5217444.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="..." /></div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4 text-info-emphasis">For those about to rock...</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content section 2-->
  <section>
    <div class="container px-5">
      <div class="row gx-5 align-items-center">
        <div class="col-lg-6">
          <div class="p-5"><img class="img-fluid rounded-5 img-thumbnail" src="https://images.pexels.com/photos/6147161/pexels-photo-6147161.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="..." /></div>
        </div>
        <div class="col-lg-6">
          <div class="p-5">
            <h2 class="display-4 text-info-emphasis">We salute you!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Content section 3-->
  <section>
    <div class="container px-5">
      <div class="row gx-5 align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-5"><img class="img-fluid rounded-5 img-thumbnail" src="https://images.pexels.com/photos/2513989/pexels-photo-2513989.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="..." /></div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-5">
            <h2 class="display-4 text-info-emphasis fw-bold">Let there be rock!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer-->
  <footer class="py-5 bg-black">
    <div class="container px-5">
      <p class="m-0 text-center text-white small">Copyright &copy; ProyectoFinal_5-MLVL FUNVAL2023 Made whit Laravel + Breeze</p>
    </div>
  </footer>

</body>

</html>