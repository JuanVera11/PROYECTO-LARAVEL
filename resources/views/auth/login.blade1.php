<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tienda de Mascotas, productos y servicios">
    <meta name="author" content="Juan Esteban Vera Velez">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/Mascotienda.png') }}">

    <title>Login - Mascotienda</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,
                 600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: url("{{ asset('img/fondoanimales.avif') }}") no-repeat center center fixed;
            background-size: cover;
            
        }
    </style>
</head>

<body>

    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row w-100 justify-content-center align-items-center">
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg" style="max-width: 500px; width: 100%;">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12 d-flex justify-content-center">
                                <div class="p-5" style="width: 100%;">

                                    
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido</h1>
                                    </div>

                                    <form method="POST" class="user" action="{{ route('login') }}">
                                        @csrf

                                       
                                        <div class="form-group">
                                            <input type="email"
                                                   class="form-control form-control-user"
                                                   name="email"
                                                   placeholder="Ingresa tu correo">
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="password"
                                                   name="password"
                                                   class="form-control form-control-user"
                                                   placeholder="Contraseña">
                                        </div>

                                        
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox"
                                                       class="custom-control-input"
                                                       id="customCheck">
                                                <label class="custom-control-label" for="customCheck">
                                                    Recordarme
                                                </label>
                                            </div>
                                        </div>

                                       
                                        <button type="submit" class="btn btn-primary btn-block">
                                            Iniciar Sesión
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 d-flex justify-content-center">
                <img src="{{ asset('img/Mascotienda.png') }}"
                     alt="Mascotienda"
                     class="img-fluid"
                     style="max-width: 475px; margin-top:20px">
                     
            </div>

        </div>
    </div>

    <!-- Scripts Bootstrap -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>
