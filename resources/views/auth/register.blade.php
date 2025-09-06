<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tienda de Mascotas, productos y servicios">
    <meta name="author" content="Juan Esteban Vera Velez">
    <link rel="shortcut icon" href="{{ asset('img/Mascotienda.png') }}" type="image/png">
    <title>Registro - Mascotienda</title>
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        .bg-register-image {
            background: url('{{ asset("img/Mascotienda.png") }}') center center / contain no-repeat;
            background-color: #F5B027;
}
      body {
      margin: 0;
      padding: 0;
      min-height: 100vh;
      background: url("{{ asset('img/fondoanimalito.png') }}") no-repeat center center fixed;
      background-size: cover;
}      
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                            <div class="col-lg-7">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Registro</h1>
                                        <h5 class="h4 text-gray-900 mb-4">MascoTienda</h5>
                                    </div>
                                    <form method="POST" class="user" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="text" class="form-control form-control-user" 
                                                    id="name" name="name" placeholder="Nombres" 
                                                    value="{{ old('name') }}" required autofocus autocomplete="name">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" 
                                                    id="lastname" name="lastname" placeholder="Apellidos" 
                                                    value="{{ old('lastname') }}" required autocomplete="family-name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="tel" class="form-control form-control-user" 
                                                    id="phone" name="phone" placeholder="Teléfono" 
                                                    value="{{ old('phone') }}" required autocomplete="phone">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="text" class="form-control form-control-user" 
                                                    id="address" name="address" placeholder="Dirección" 
                                                    value="{{ old('address') }}" required autocomplete="address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" 
                                                id="email" name="email" placeholder="Correo electrónico" 
                                                value="{{ old('email') }}" required autocomplete="username">
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-6 mb-3 mb-sm-0">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password" name="password" placeholder="Contraseña" 
                                                    required autocomplete="new-password">
                                            </div>
                                            <div class="col-sm-6">
                                                <input type="password" class="form-control form-control-user"
                                                    id="password_confirmation" name="password_confirmation" 
                                                    placeholder="Confirmar Contraseña" required autocomplete="new-password">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Registrarse
                                        </button>
                                        <hr>
                                    </form>
                                    
                                    <div class="text-center">
                                        <a class="small" href="{{ route('login') }}"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>