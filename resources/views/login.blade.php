<!doctype html>
<html lang="es">
  <head>
    <title>LOG IN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body{
            background-image: url("{{ asset('img/3955269.jpg')}}");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>
  </head>
  <body>
        <main class="container">
            <div class="center">
                <div class="card shadow-lg rounded">
                    <div class="card-header">
                        <center>
                            <span class="display-4 card-title"><b>ControlDAK</b></span>
                            <p class="card-text subtitle">Sistema de control de personal</p>
                        </center>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title mt-3 pb-3">
                            <center style="color: #00476F;font-weight: bolder;">LOG IN</center>
                        </h4>
                        <div class="">
                            <form>
                                <div class="form-group">
                                    <span style="color: red"><center>Usuario o contraseña incorrectos</center></span>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control email" id="user" placeholder="USUARIO">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control pass" id="password" placeholder="PASSWORD">
                                </div>
                                <div class="form-group pb-5">
                                    <span><center><a class="text-muted" href="#">Olvidaste tu contraseña?</a></center></span>
                                </div>
                                <div class="d-flex justify-content-end mb-2"><button type="submit" class="pl-4 pr-4 login btn" style="background-color: #97DCE1">LOG IN</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/all.js') }}"></script>
  </body>
</html>