<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- ### SlideShow ### -->
  <link rel="stylesheet" href="{{asset('js/splide/dist/css/splide.min.css')}}">
  <script src="{{asset('js/splide/dist/js/splide.min.js')}}"></script>

  <!-- bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  


  <!-- bootstrap icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <!-- ### SlideShow ### -->
  <link rel="stylesheet" href="{{ asset('js/splide/dist/css/splide.min.css') }}">
  <script src="{{ asset('js/splide/dist/js/splide.min.js') }}"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/comum.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/footer.css')}}">
  <link href="{{ asset('css/dashboardBO.css') }}" rel="stylesheet">

  @yield('links')

</head>


<body>

  <!-- ======= Header ======= -->
  
  <main id="main">
  @include('layout.partials.navBO')
    @yield('main')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <!-- Imagem para "fullscreen" -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script type="text/javascript">
    var nav = document.querySelector('nav');
    var mode = document.getElementById("mode");

    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 50) {
        nav.classList.add('bg-light', 'shadow');
      } else {
        nav.classList.remove('bg-light', 'shadow');
      }
    });

   /*  mode.onclick = () => {
      document.body.classList.toggle("light-mode");
      if (document.body.classList.contains("light-mode")) {
        mode.src = "{{asset('img/darkMode/sun.png')}}";
      } else {
        mode.src = "{{asset('img/darkMode/moon.png')}}";
      } 
    }*/
  </script>

  @yield('script')

</body>

</html>