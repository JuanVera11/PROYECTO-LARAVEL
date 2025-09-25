<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal - MASCOTIENDA @yield('module')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/Mascotienda.png') }}">
</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        @if (Route::has('login'))
        <div class="auth-buttons-container">
            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-outline-primary">Registrarse</a>
            @endauth
        </div>
        @endif
        <main class="container py-5">
            <section class="hero-section text-center mb-5">
                <h1 class="display-4 fw-bold text-primary mb-3">
                    <br>
                    Bienvenido a MascoTienda Manizales
                </h1>
                <p class="lead text-secondary mb-4">
                    Tu aliado confiable en el bienestar y la felicidad de tu compañero animal.
                </p>
                <p class="location-info fs-5 text-muted">
                    Estamos ubicados en la Carrera 23 #65-30, Barrio Palermo, Manizales, Caldas. Un punto de acceso para la gente de la ciudad.
                </p>
            </section>

            <hr class="my-5">

            <section class="services-overview mb-5">
                <h2 class="text-center text-primary mb-4">Nuestros Servicios</h2>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                        <div class="card h-100 shadow-sm service-card">
                            <div class="card-body">
                                <h3 class="card-title text-success fs-5">Nutrición Especializada</h3>
                                <p class="card-text">
                                    Ofrecemos una cuidadosa selección de alimentos premium para perros, gatos, hámsteres y aves, incluyendo loros. Nuestro catálogo abarca desde dietas balanceadas hasta opciones medicadas y específicas para cada etapa de la vida de tu mascota, garantizando una alimentación óptima y saludable.
                                </p>
                                <img src="{{ asset('img/perrito.jpeg') }}" class="card-img-top card-img-fixed-height" alt="Perrito - Nutrición especializada">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow-sm service-card">
                            <div class="card-body">
                                <h3 class="card-title text-info fs-5">Accesorios y Juguetería</h3>
                                <p class="card-text">
                                    Descubre un universo de juguetes y accesorios diseñados para estimular y entretener a tu mascota. Desde collares ergonómicos y camas confortables hasta innovadores juguetes interactivos en diversas formas, tamaños y colores. Todo lo necesario para enriquecer su entorno y fomentar su actividad.
                                </p>
                                <img src="{{ asset('img/accesorios.jpeg') }}" class="card-img-top card-img-fixed-height" alt="Accesorios y Juguetes de Mascotas">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card h-100 shadow-sm service-card">
                            <div class="card-body">
                                <h3 class="card-title text-warning fs-5">Cuidado Personal y Recreación</h3>
                                <p class="card-text">
                                    Proporcionamos servicios de baño profesional y cuidado personal en un ambiente seguro y tranquilo. Además, contamos con áreas de recreación supervisada donde tu mascota podrá socializar y jugar con profesionales dedicados, asegurando su bienestar físico y emocional mientras te ausentas.
                                </p>
                                <img src="{{ asset('img/cuidadomascota.jpeg') }}" class="card-img-top card-img-fixed-height" alt=" Cuidado de Animales">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <hr class="my-5">

            <section class="featured-products text-center mb-5">
                <h2 class="text-primary mb-4">Productos Destacados</h2>
                <p class="fs-5 text-secondary mx-auto philosophy-text">
                    Explora nuestra gama de productos cuidadosamente seleccionados para las necesidades de tu mascota.
                </p>
                <div class="row row-cols-1 row-cols-md-3 g-4 mt-4">
                    @foreach ($products as $product)
                    <div class="col">
                        <div class="card h-100 shadow-sm product-card" 
                            data-bs-toggle="modal" 
                            data-bs-target="#productModal"
                            data-product-id="{{ $product->id }}"
                            data-product-name="{{ $product->name }}"
                            data-product-description="{{ $product->description }}"
                            data-product-price="{{ number_format($product->price, 0, ',', '.') }}"
                            data-product-available="{{ $product->available ? 'Sí' : 'No' }}"
                            data-product-photo="{{ asset('img/' . $product->photo) }}"
                            style="cursor: pointer;">
                            <img src="{{ asset('img/' . $product->photo) }}" class="card-img-top card-img-fixed-height" alt="{{ $product->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="mt-auto">
                                    <p class="price-tag fw-bold text-success fs-4 mb-2">${{ number_format($product->price, 0, ',', '.') }}</p>
                                    <p class="card-text small text-muted">Disponibilidad: {{ $product->available ? 'Sí' : 'No' }}</p>
                                    <form action="{{ route('orders.store') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <button type="submit" class="btn btn-primary btn-block">Comprar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>

            <hr class="my-5">

            <section class="about-us text-center mb-5">
                <h2 class="text-primary mb-4">Nuestra Filosofía</h2>
                <p class="fs-5 text-secondary mx-auto philosophy-text">
                    En MascoTienda Manizales, creemos firmemente que cada mascota merece una vida plena, saludable y llena de alegría. Nos dedicamos a ser más que una tienda, somos un centro integral donde la calidad de nuestros productos y la calidez de nuestro servicio se fusionan para crear una experiencia inigualable. Nuestro equipo de profesionales está apasionado por el bienestar animal, brindando asesoría experta y un cuidado excepcional, porque tu mascota es parte de nuestra familia.
                </p>
            </section>
        </main>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <li>
                        Perfil de GitHub <a href="https://github.com/JuanVera11" target="_blank">JuanesVera11</a>
                    </li>
                </div>
            </div>
        </footer>
        <style>

            body {
                font-family: 'Poppins', sans-serif;
                background-color: var(--light-bg);
                color: #343a40;
                line-height: 1.6;
            }

            .hero-section,
            .services-overview,
            .featured-products,
            .about-us {
                animation: fadeIn 0.8s ease-out;
            }

            @media (max-width: 768px) {
                .display-4 {
                    font-size: 2.5rem;
                }

                .lead {
                    font-size: 1.1rem;
                }

                h2 {
                    font-size: 1.8rem;
                }

                .container {
                    padding: 1.5rem;
                    margin: 1rem;
                }

                .hero-section {
                    padding: 2rem 0;
                }

                .service-card .card-body,
                .featured-products .card-body {
                    padding: 1.25rem;
                }
            }

            @media (max-width: 576px) {
                .display-4 {
                    font-size: 2rem;
                }

                .card-actions .btn {
                    display: block;
                    width: 100%;
                    margin: 0.25rem 0;
                }
            }
        
            .product-card {
                cursor: pointer;
                transition: transform 0.3s ease-in-out;
            }

            .product-card:hover {
                transform: scale(1.05);
            }

            .card-img-fixed-height {
                height: 250px;
                object-fit: cover;
                width: 100%;
            }

            .modal-product-image {
                height: 400px;
                max-width: 500px;
                object-fit: contain;
                display: block;
                margin: 0 auto;
            }

            .auth-buttons-container {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 1000;
                display: flex;
                gap: 15px;
            }

            footer .copyright a {
                font-size: 18px;
                color: #007bff;
                text-decoration: none;
                font-weight: 500;
                transition: color 0.3s ease-in-out;
            }

            footer .copyright a:hover {
                color: #0056b3;
                text-decoration: underline;
            }

            footer .copyright li {
                font-size: 18px;
                list-style: none;
            }
        </style>

        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productModalLabel">Detalles del Producto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img id="modalProductImage" src="" alt="Imagen del Producto" class="img-fluid modal-product-image">
                            </div>
                            <div class="col-md-6">
                                <h2 id="modalProductName" class="fw-bold"></h2>
                                <p id="modalProductDescription"></p>
                                <hr>
                                <p class="fs-4 fw-bold text-success">Precio: <span id="modalProductPrice"></span></p>
                                <p class="text-muted">Disponibilidad: <span id="modalProductAvailability"></span></p>
                                <form id="modalProductForm" action="" method="POST" class="mt-4">
                                    @csrf
                                    <input type="hidden" id="modalProductId" name="product_id" value="Product_id">
                                    <button type="submit" class="btn btn-primary btn-lg w-100">Comprar Ahora</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productCards = document.querySelectorAll('.product-card');
            const productModal = document.getElementById('productModal');

            productCards.forEach(card => {
                card.addEventListener('click', function(event) {
                    // Evita que el clic en el botón "Comprar" active el modal
                    if (event.target.closest('form')) {
                        return;
                    }

                    const name = this.getAttribute('data-product-name');
                    const description = this.getAttribute('data-product-description');
                    const price = this.getAttribute('data-product-price');
                    const available = this.getAttribute('data-product-available');
                    const photo = this.getAttribute('data-product-photo');
                    const productId = this.getAttribute('data-product-id');

                    document.getElementById('modalProductName').textContent = name;
                    document.getElementById('modalProductDescription').textContent = description;
                    document.getElementById('modalProductPrice').textContent = '$' + price;
                    document.getElementById('modalProductAvailability').textContent = available;
                    document.getElementById('modalProductImage').src = photo;
                    document.getElementById('modalProductId').value = productId;
                });
            });
        });
    </script>
</body>

</html>