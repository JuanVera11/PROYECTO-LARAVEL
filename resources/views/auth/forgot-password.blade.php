<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Recuperar contraseña">
    <meta name="author" content="Juan Esteban Vera Velez">

    <title>MascoTienda</title>

    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/Mascotienda.png') }}">
</head>

<body>
    <div class="centered-container">
        <div class="password-reset-card">
            <div class="left-panel">
                <div class="caja-imagen">
                    <img src="{{ asset('img/Mascotienda.png') }}" class="logo-mascotienda" alt="Mascotienda Logo">
                </div>
            </div>

            <div class="right-panel">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-2">¿Olvidaste tu contraseña?</h1>
                    <p class="mb-4">No te preocupes, solo ingresa tu correo electrónico y te enviaremos un enlace para restablecer tu contraseña.</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{ $error }}<br>
                        @endforeach
                    </div>
                @endif
                
                <form method="POST" action="{{ route('password.email') }}" class="user">
                    @csrf
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Correo electrónico..." required autofocus value="{{ old('email') }}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Enviar enlace
                    </button>
                </form>
                <hr>
                <div class="text-center">
                    <a class="small" href="{{url('register')}}">¡Crear una cuenta!</a>
                </div>
                <div class="text-center">
                    <a class="small" href="{{url('login')}}">¿Ya tienes una cuenta? ¡Inicia sesión!</a>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
       body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: url("{{ asset('img/fondoolvidarcon.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
        }
    .centered-container {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }
    .password-reset-card {
        background: #fff;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
        border-radius: 1rem;
        width: 100%;
        max-width: 900px;
        display: flex;
        flex-direction: row;
        overflow: hidden;
    }
    .left-panel {
        flex: 1;
        padding: 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #fff9e6; 
        border-right: 1px solid #e0e0e0; 
    }
    .caja-imagen {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .logo-mascotienda {
        height: 1000px;
        width: 1000px; 
        height: auto;  
        max-width: 100%; 
    }
    .right-panel {
        flex: 1;
        padding: 2.5rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .logo-text {
        text-align: center;
        margin-top: 1rem;
        color: #4a4a4a;
    }
    .logo-text h4 {
        font-weight: bold;
        margin-bottom: 0.25rem;
    }
    .logo-text p {
        font-size: 0.9rem;
        color: #718096;
    }
    @media (max-width: 991.98px) {
        .password-reset-card {
            flex-direction: column;
        }
        .left-panel {
            border-bottom: 1px solid #e0e0e0;
            border-right: none;
        }
    }
</style>
</html>
