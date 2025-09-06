<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tienda de Mascotas, productos y servicios">
    <meta name="author" content="Juan Esteban Vera Velez">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/Mascotienda.png') }}">

    <title>Login - Mascotienda</title>

    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" 
          rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: url("{{ asset('img/fondoanimales.avif') }}") no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
        }

         .bg-register-image {
            background: url('{{ asset("img/Mascotienda.png") }}') center center / contain no-repeat;
            background-color: #F5B027;;
         }

        .login-container {
            display: flex;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            max-width: 900px;
            width: 90%;
            min-height: 500px;
        }

        .logo-section {
            background: linear-gradient(135deg, #f39c12, #e67e22);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            flex: 1;
            color: white;
        }

        .logo-section img {
            max-width: 100px;
            margin-bottom: 20px;
        }

        .logo-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0;
            text-align: center;
        }

        .logo-section p {
            margin: 10px 0 0 0;
            font-size: 0.9rem;
            text-align: center;
            opacity: 0.9;
        }

        .form-section {
            padding: 40px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .form-subtitle {
            color: #666;
            margin-bottom: 30px;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e1e5e9;
            border-radius: 50px;
            font-size: 14px;
            transition: all 0.3s ease;
            background: #f8f9fa;
            box-sizing: border-box;
        }

        .form-control:focus {
            outline: none;
            border-color: #f39c12;
            background: white;
            box-shadow: 0 0 0 3px rgba(243, 156, 18, 0.1);
        }

        .btn-login {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 50px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .checkbox-container input[type="checkbox"] {
            margin-right: 10px;
            transform: scale(1.2);
        }

        .checkbox-container label {
            font-size: 14px;
            color: #666;
        }

        .alert {
            padding: 12px 20px;
            margin-bottom: 20px;
            border-radius: 50px;
            font-size: 14px;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }

        /* Estilos para errores de validación */
        .is-invalid {
            border-color: #dc3545 !important;
            box-shadow: 0 0 0 3px rgba(220, 53, 69, 0.1) !important;
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
                max-width: 400px;
                margin: 20px;
            }
            
            .logo-section {
                padding: 30px 20px;
            }
            
            .logo-section h1 {
                font-size: 2rem;
            }
            
            .form-section {
                padding: 30px;
            }
        }
        .logo-section img {
             max-width: 100%;
            height: auto;
            display: block;
        margin: 0 auto;

        
}
    </style>
</head>

<body>
    <div class="login-container">
        <div class="logo-section">
            <img src="{{ asset('img/Mascotienda.png') }}" alt="Mascotienda Logo">
        </div>

        <div class="form-section">
            <div class="form-title">Login</div>
            <div class="form-subtitle"><strong>MascoTienda</strong></div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input type="email"
                           class="form-control @error('email') is-invalid @enderror"
                           name="email"
                           value="{{ old('email') }}"
                           placeholder="Correo electrónico"
                           required
                           autocomplete="email"
                           autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="password"
                           name="password"
                           class="form-control @error('password') is-invalid @enderror"
                           placeholder="Contraseña"
                           required
                           autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="checkbox-container">
                    <input type="checkbox" 
                           id="remember" 
                           name="remember" 
                           {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember">Recordarme</label>
                </div>

                <button type="submit" class="btn-login">
                    Iniciar Sesión
                </button>

                <div class="text-center mt-3">
                    @if (Route::has('password.request'))
                        <a class="small" href="{{ route('password.request') }}" style="color: #666; text-decoration: none;">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>
                
                @if (Route::has('register'))
                    <div class="text-center mt-2">
                        <a class="small" href="{{ route('register') }}" style="color: #667eea; text-decoration: none;">
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>
</html>