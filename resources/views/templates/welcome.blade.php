<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tarefa Prestige</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Botstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
    <body>

        <nav class="navbar sticky-top navbar-expand-lg navbar-light  navbar-color">
          <a class="navbar-brand" href="#">
            <img src="https://www.grantuk.com/media/1875/g1-2018-logo-rgb.jpg" width="30" height="30" alt="">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
              
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">HOME <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{route('contato')}}">CONTATO <span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <div class="col-auto">
                  <label class="sr-only" for="inlineFormInputGroup">Buscar</label>
                  <div class="input-group mb-2">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <img src="https://images.vexels.com/media/users/3/143437/isolated/preview/390e394e1ea17f2b8361c8a16d88364e---cone-simples-de-lupa-by-vexels.png" style="width: 20px; height: 20px">
                      </div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Buscar">
                  </div>
                </div>
            </form>
          </div>
        </nav>

      <section class="content">

          @yield('content')

      </section>

            <!-- Footer -->
      <footer class="footer">
        <div class="footer-interno">
          Linkedin
          Github
        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright
          
        </div>
        <!-- Copyright -->

      </footer>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="{{url('js/script.js')}}"></script>

      </body>
</html>
