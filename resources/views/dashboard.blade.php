@extends('layouts.app')

@section('content')
<head>
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/Mascotienda.png') }}">
</head>

<main class="container py-5">
    <section class="hero-section text-center mb-5">
        <h1 class="display-4 fw-bold text-primary mb-3">
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
                   <img src="{{ asset('img/perrito.jpeg') }}" class="card-img-top" height="300"  alt="Perrito - Nutrición especializada">

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
                   <img src="{{ asset('img/accesorios.jpeg') }}" class="card-img-top" height="300"  alt="Accesorios y Juguetes de Mascotas">
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
                             <img src="{{ asset('img/cuidadomascota.jpeg') }}" class="card-img-top" height="300"   alt=" Cuidado de Animales">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <section class="featured-products text-center mb-5">
        <h2 class="text-primary mb-4">Productos Destacados</h2>
        <p class="fs-5 text-secondary">
            <p class="fs-5 text-secondary mx-auto philosophy-text">
            Explora nuestra gama de productos cuidadosamente seleccionados para las necesidades de tu mascota
        </p>
        
        </p>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
            <div class="col">
                <div class="product-item card h-100 shadow-sm">
                    <div class="card-body">
                         <img src="{{ asset('img/pedigree.png') }}" class="card-img-top" height="300"   alt=" Alimento exclusivo">
                        <h5 class="card-title">Alimento Premium</h5>
                        <p class="card-text small text-muted">Para todas las razas y edades.</p>
                        <p class="price-tag fw-bold text-success">$50.000</p>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-sm me-2">Comprar</button>
                            <button class="btn btn-outline-primary btn-sm">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-item card h-100 shadow-sm">
                    <img src="{{ asset('img/juguetegato.jpeg') }}" class="card-img-top" alt="Juguete para gato">
                    <div class="card-body">
                        <h5 class="card-title">Juguete Interactivo</h5>
                        <p class="card-text small text-muted">Estimula la mente de tu gato.</p>
                        <p class="price-tag fw-bold text-success">$20.000</p>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-sm me-2">Comprar</button>
                            <button class="btn btn-outline-primary btn-sm">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-item card h-100 shadow-sm">
                    <img src="{{ asset('img/camaortopedica.jpeg') }}" class="card-img-top" height="300"  alt="Cama Ortopedica">
                    <div class="card-body">
                        <h5 class="card-title">Cama Ortopédica</h5>
                        <p class="card-text small text-muted">Máximo confort y descanso.</p>
                        <p class="price-tag fw-bold text-success">$120.000</p>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-sm me-2">Comprar</button>
                            <button class="btn btn-outline-primary btn-sm">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="product-item card h-100 shadow-sm">
                   <img src="{{ asset('img/snacks.jpg') }}" class="card-img-top" height="300"  alt="Snacks para mascotas">
                    <div class="card-body">
                        <h5 class="card-title">Snacks Naturales</h5>
                        <p class="card-text small text-muted">Recompensa saludable y deliciosa.</p>
                        <p class="price-tag fw-bold text-success">$15.000</p>
                        <div class="card-actions">
                            <button class="btn btn-primary btn-sm me-2">Comprar</button>
                            <button class="btn btn-outline-primary btn-sm">Ver Más</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-5">

    <section class="about-us text-center mb-5">
        <h2 class="text-primary mb-4">Nuestra Filosofía</h2>
        <p class="fs-5 text-secondary mx-auto philosophy-text">
            En MascoTienda Manizales, creemos firmemente que cada mascota merece una vida plena, saludable y llena de alegría. Nos dedicamos a ser más que una tienda; somos un centro integral donde la calidad de nuestros productos y la calidez de nuestro servicio se fusionan para crear una experiencia inigualable. Nuestro equipo de profesionales está apasionado por el bienestar animal, brindando asesoría experta y un cuidado excepcional, porque tu mascota es parte de nuestra familia.
        </p>
    </section>
</main>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /* Variables CSS para mejor mantenimiento */
    :root {
        --primary-color: #007bff;
        --success-color: #28a745;
        --warning-color: #ffc107;
        --info-color: #17a2b8;
        --secondary-color: #6c757d;
        --light-bg: #f8f9fa;
        --white: #ffffff;
        --shadow-light: 0 4px 20px rgba(0, 0, 0, 0.08);
        --shadow-hover: 0 8px 30px rgba(0, 0, 0, 0.15);
        --border-radius: 12px;
    }

    /* Estilos base */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: var(--light-bg);
        color: #343a40;
        line-height: 1.6;
    }

    .container {
        background-color: var(--white);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-light);
        padding: 3rem;
        max-width: 1200px;
    }

    /* Hero Section */
    .hero-section {
        padding: 3rem 0;
        background: linear-gradient(135deg, #e9f7fe 0%, #f0f8ff 100%);
        border-radius: 10px;
        margin-bottom: 3rem;
        border: 1px solid #d1ecf1;
    }

    .display-4 {
        font-size: 3.5rem;
        color: var(--primary-color);
        letter-spacing: -0.5px;
        text-shadow: 0 2px 4px rgba(0, 123, 255, 0.1);
    }

    .lead {
        font-size: 1.35rem;
        color: var(--secondary-color);
        font-weight: 400;
    }

    .location-info {
        font-size: 1.1rem;
        color: #495057;
        font-weight: 500;
    }

    /* Divisores */
    hr.my-5 {
        border-top: 2px solid #e9ecef;
        opacity: 0.7;
        margin: 3rem 0;
    }

    /* Títulos de Sección */
    h2 {
        font-size: 2.2rem;
        font-weight: 600;
        color: var(--primary-color);
        position: relative;
        padding-bottom: 0.75rem;
        margin-bottom: 2rem;
    }

    h2::after {
        content: '';
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 0;
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--success-color), var(--info-color));
        border-radius: 5px;
    }

    /* Cards de Servicios */
    .service-card {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border-radius: 10px;
        border: none;
        overflow: hidden;
    }

    .service-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-hover) !important;
    }

    .service-card .card-body {
        padding: 2rem;
        text-align: center;
    }

    .service-card .card-title {
        font-weight: 600;
        margin-bottom: 1rem;
        font-size: 1.4rem;
    }

    .service-card .card-text {
        font-size: 1.05rem;
        line-height: 1.7;
        color: #555;
    }

    /* Productos Destacados */
    .featured-products .product-item {
        border: none;
        border-radius: 10px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        overflow: hidden;
    }

    .featured-products .product-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
    }

    .featured-products .card-img-top {
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        object-fit: cover;
        height: 180px;
        transition: transform 0.3s ease;
    }

    .featured-products .product-item:hover .card-img-top {
        transform: scale(1.05);
    }

    .featured-products .card-body {
        padding: 1.5rem;
        text-align: center;
    }

    .featured-products .card-title {
        font-weight: 600;
        color: #333;
        font-size: 1.15rem;
        margin-bottom: 0.75rem;
    }

    .featured-products .card-text {
        margin-bottom: 0.75rem;
    }

    .price-tag {
        font-size: 1.25rem;
        margin: 0.5rem 0;
    }

    .card-actions {
        margin-top: 1rem;
    }

    .card-actions .btn {
        border-radius: 20px;
        font-weight: 500;
        padding: 0.5rem 1rem;
        transition: all 0.3s ease;
    }

    .card-actions .btn:hover {
        transform: translateY(-1px);
    }

    /* Sección "Nuestra Filosofía" */
    .about-us .philosophy-text {
        font-style: italic;
        color: #555;
        line-height: 1.8;
        max-width: 800px;
        font-size: 1.2rem;
    }

    /* Animaciones suaves */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-section,
    .services-overview,
    .featured-products,
    .about-us {
        animation: fadeIn 0.8s ease-out;
    }

    /* Responsividad mejorada */
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

        .philosophy-text {
            font-size: 1rem;
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
        
        .card-actions .btn.me-2 {
            margin-right: 0 !important;
        }
    }

    /* Estados focus para accesibilidad */
    .btn:focus,
    .card:focus {
        outline: 2px solid var(--primary-color);
        outline-offset: 2px;
    }

    /* Mejoras de contraste */
    .text-muted {
        color: #666 !important;
    }
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    // Añadir animaciones suaves al scroll
    document.addEventListener('DOMContentLoaded', function() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 'fadeIn 0.8s ease-out';
                }
            });
        }, observerOptions);

        // Observar todas las secciones
        document.querySelectorAll('section').forEach(section => {
            observer.observe(section);
        });

        // Añadir efectos hover mejorados a las cards
        document.querySelectorAll('.service-card, .product-item').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-8px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    });
</script>
@endpush