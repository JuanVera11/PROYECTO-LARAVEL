@extends('layouts.app')

@section('content')
<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
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
        <!-- Productos (16) -->
<div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
    <!-- 1 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/pedigree.png') }}" class="card-img-top producto-img"
                 height="300" alt="Alimento exclusivo"
                 data-title="Alimento Premium"
                 data-desc="Para todas las razas y edades."
                 data-price="$50.000"
                 data-vermas="{{ route('index2') }}">
            <div class="card-body">
                <h5 class="card-title">Alimento Premium</h5>
                <p class="card-text small text-muted">Para todas las razas y edades.</p>
                <p class="price-tag fw-bold text-success">$50.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index2') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 2 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/juguetegato.jpeg') }}" class="card-img-top producto-img"
                 height="300" alt="Juguete para gato"
                 data-title="Juguete Interactivo"
                 data-desc="Estimula la mente de tu gato."
                 data-price="$20.000"
                 data-vermas="{{ route('index3') }}">
            <div class="card-body">
                <h5 class="card-title">Juguete Interactivo</h5>
                <p class="card-text small text-muted">Estimula la mente de tu gato.</p>
                <p class="price-tag fw-bold text-success">$20.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index3') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 3 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/camaortopedica.jpeg') }}" class="card-img-top producto-img"
                 height="300" alt="Cama Ortopedica"
                 data-title="Cama Ortopédica"
                 data-desc="Máximo confort y descanso."
                 data-price="$120.000"
                 data-vermas="{{ route('index2') }}">
            <div class="card-body">
                <h5 class="card-title">Cama Ortopédica</h5>
                <p class="card-text small text-muted">Máximo confort y descanso.</p>
                <p class="price-tag fw-bold text-success">$120.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index2') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 4 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/snacks.jpg') }}" class="card-img-top producto-img"
                 height="300" alt="Snacks para mascotas"
                 data-title="Snacks Naturales"
                 data-desc="Recompensa saludable y deliciosa."
                 data-price="$15.000"
                 data-vermas="{{ route('index2') }}">
            <div class="card-body">
                <h5 class="card-title">Snacks Naturales</h5>
                <p class="card-text small text-muted">Recompensa saludable y deliciosa.</p>
                <p class="price-tag fw-bold text-success">$15.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index2') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fila 2 -->
<div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
    <!-- 5 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/jaulahamster.jpeg') }}" class="card-img-top producto-img"
                 height="300" alt="Jaula de Hamster"
                 data-title="Jaula de Hamster"
                 data-desc="Para el hogar de tu mascota."
                 data-price="$130.000"
                 data-vermas="{{ route('index4') }}">
            <div class="card-body">
                <h5 class="card-title">Jaula de Hamster</h5>
                <p class="card-text small text-muted">Para el hogar de tu mascota.</p>
                <p class="price-tag fw-bold text-success">$130.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index4') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 6 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/alimentohamster.webp') }}" class="card-img-top producto-img"
                 height="300" alt="Alimento Hamster"
                 data-title="Alimento para Hamster"
                 data-desc="Un pasabocas para tu amig@"
                 data-price="$15.000"
                 data-vermas="{{ route('index4') }}">
            <div class="card-body">
                <h5 class="card-title">Alimento para Hamster</h5>
                <p class="card-text small text-muted">un pasabocas para tu amig@</p>
                <p class="price-tag fw-bold text-success">$15.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index4') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 7 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/hamacasLoro.webp') }}" class="card-img-top producto-img"
                 height="300" alt="Hamaca Loro"
                 data-title="Hamaca Loro"
                 data-desc="Para el pasatiempo de tu lor@."
                 data-price="$40.000"
                 data-vermas="{{ route('index5') }}">
            <div class="card-body">
                <h5 class="card-title">Hamaca Loro</h5>
                <p class="card-text small text-muted">para el pasatiempo de tu lor@.</p>
                <p class="price-tag fw-bold text-success">$40.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index5') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 8 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/jaulaloro.jpg') }}" class="card-img-top producto-img"
                 height="300" alt="Jaula de Loro"
                 data-title="Jaula de Loro"
                 data-desc="El hogar para la estadía de tu loro en tu casa."
                 data-price="$115.000"
                 data-vermas="{{ route('index5') }}">
            <div class="card-body">
                <h5 class="card-title">Jaula de Loro</h5>
                <p class="card-text small text-muted">EL hogar para la estadia de tu loro en tu casa.</p>
                <p class="price-tag fw-bold text-success">$115.000</p>
                <div class="card-actions">
                    <a href="{{ route('index5') }}" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <button class="btn btn-outline-primary btn-sm">Ver Más</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fila 3 -->
<div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
    <!-- 9 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/huesoperrito.avif') }}" class="card-img-top producto-img"
                 height="300" alt="Hueso de Perrito"
                 data-title="Hueso de Perrito"
                 data-desc="Para la diversión de tu fiel amig@."
                 data-price="$10.000"
                 data-vermas="{{ route('index2') }}">
            <div class="card-body">
                <h5 class="card-title">Hueso de perrito</h5>
                <p class="card-text small text-muted">Para la diversión de tu fiel amig@.</p>
                <p class="price-tag fw-bold text-success">$10.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index2') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 10 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/juguetelectricoperro.jpeg') }}" class="card-img-top producto-img"
                 height="300" alt="Juguete Electrico para Perro"
                 data-title="Juguete Eléctrico Perro"
                 data-desc="Para que tu mascota tenga su compañía."
                 data-price="$50.000"
                 data-vermas="{{ route('index2') }}">
            <div class="card-body">
                <h5 class="card-title">Juguete Electrico Perro</h5>
                <p class="card-text small text-muted">Para que tu mascota tenga su compañia.</p>
                <p class="price-tag fw-bold text-success">$50.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index2') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 11 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/pelucheperro.jpeg') }}" class="card-img-top producto-img"
                 height="300" alt="Peluche de Perro"
                 data-title="Peluche para Perro"
                 data-desc="Juguete a gusto de tu mascota."
                 data-price="$25.000"
                 data-vermas="{{ route('index2') }}">
            <div class="card-body">
                <h5 class="card-title">Peluche para Perro</h5>
                <p class="card-text small text-muted">Juguete a gusto de tu mascota.</p>
                <p class="price-tag fw-bold text-success">$25.000</p>
                <div class="card-actions">
                    <a href="{{ route('index2') }}" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <button class="btn btn-outline-primary btn-sm">Ver Más</button>
                </div>
            </div>
        </div>
    </div>

    <!-- 12 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/hamburguesa.webp') }}" class="card-img-top producto-img"
                 height="300" alt="Juguete de Hamburguesa"
                 data-title="Juguete de Hamburguesa"
                 data-desc="Juguete mordible y con sonido para que tu mascota se divierta."
                 data-price="$15.000"
                 data-vermas="{{ route('index2') }}">
            <div class="card-body">
                <h5 class="card-title">Juguete de Hamburugesa</h5>
                <p class="card-text small text-muted">Juguete mordible y con sonido para que tu mascota se divierta.</p>
                <p class="price-tag fw-bold text-success">$15.000</p>
                <div class="card-actions">
                    <a href="{{ route('index2') }}" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <button class="btn btn-outline-primary btn-sm">Ver Más</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- fila 4 -->
<div class="row row-cols-1 row-cols-md-4 g-4 mt-4">
    <!-- 13 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/ratonesgatos.webp') }}" class="card-img-top producto-img"
                 height="300" alt="Raton de Juguete para Gato"
                 data-title="Ratón de Juguete para Gato"
                 data-desc="Ratón divertido y colorido para que tu gat@ pase buenos momentos."
                 data-price="$10.000"
                 data-vermas="{{ route('index3') }}">
            <div class="card-body">
                <h5 class="card-title">Raton de Juguete para Gato</h5>
                <p class="card-text small text-muted">Raton divertido y colorido para que tu gat@ pase buenos momentos.</p>
                <p class="price-tag fw-bold text-success">$10.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index3') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 14 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/juguetegato2.webp') }}" class="card-img-top producto-img"
                 height="300" alt="Pez arrugado juguete para gato"
                 data-title="Juguete Pez Arrugado"
                 data-desc="Ayuda a la recreación de tu gato."
                 data-price="$25.000"
                 data-vermas="{{ route('index3') }}">
            <div class="card-body">
                <h5 class="card-title">Juguete Pez arrugado</h5>
                <p class="card-text small text-muted">Ayuda a la recreación de tu gato.</p>
                <p class="price-tag fw-bold text-success">$25.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index3') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 15 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/pecesgatos.webp') }}" class="card-img-top producto-img"
                 height="300" alt="Juguete de Pez para Gato"
                 data-title="Juguete de Pez para Gato"
                 data-desc="Pez con sonido para tu gat@, además bastante comodo para morder"
                 data-price="$18.000"
                 data-vermas="{{ route('index3') }}">
            <div class="card-body">
                <h5 class="card-title">Juguete de Pez para Gato</h5>
                <p class="card-text small text-muted">Pez con sonido para tu gat@, además bastante comodo para morder</p>
                <p class="price-tag fw-bold text-success">$18.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index3') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 16 -->
    <div class="col">
        <div class="product-item card h-100 shadow-sm">
            <img src="{{ asset('img/resortesgatos.jpg') }}" class="card-img-top producto-img"
                 height="300" alt="Resortes para Gato"
                 data-title="Resortes para Gato"
                 data-desc="para que tu gato corra y vea como el resorte salta y se estira."
                 data-price="$5.000"
                 data-vermas="{{ route('index3') }}">
            <div class="card-body">
                <h5 class="card-title">Resortes para Gato</h5>
                <p class="card-text small text-muted">para que tu gato corra y vea como el resorte salta y se estira.</p>
                <p class="price-tag fw-bold text-success">$5.000</p>
                <div class="card-actions">
                    <a href="#" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="{{ route('index3') }}" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalProducto" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content shadow-lg">
            <div class="modal-body text-center">
                <img id="modalImagen" src="" class="img-fluid mb-3" alt="Producto">
                <h5 id="modalTitulo"></h5>
                <p id="modalDescripcion" class="small text-muted"></p>
                <p id="modalPrecio" class="fw-bold text-success"></p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="#" id="modalComprar" class="btn btn-primary btn-sm me-2">Comprar</a>
                    <a href="#" id="modalVerMas" class="btn btn-outline-primary btn-sm">Ver Más</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Para desplegar el Modal
    document.addEventListener("DOMContentLoaded", function () {
        const modalEl = document.getElementById("modalProducto");
        const modal = new bootstrap.Modal(modalEl);
        const modalImagen = document.getElementById("modalImagen");
        const modalTitulo = document.getElementById("modalTitulo");
        const modalDescripcion = document.getElementById("modalDescripcion");
        const modalPrecio = document.getElementById("modalPrecio");
        const modalVerMas = document.getElementById("modalVerMas");
        const modalComprar = document.getElementById("modalComprar");

        document.querySelectorAll(".producto-img").forEach(img => {
    img.addEventListener("click", function () {
        // Actualiza el contenido del modal
        modalImagen.src = this.src;
        modalTitulo.textContent = this.dataset.title || '';
        modalDescripcion.textContent = this.dataset.desc || '';
        modalPrecio.textContent = this.dataset.price || '';
        modalVerMas.href = this.dataset.vermas || '#';
        
        // Muestra el modal
        modal.show();
    });
});

        // cerrar modal al hacer click fuera de la imagen 
        modalEl.addEventListener('hidden.bs.modal', function () {
            modalImagen.src = '';
            modalTitulo.textContent = '';
            modalDescripcion.textContent = '';
            modalPrecio.textContent = '';
            modalVerMas.href = '#';
        });
    });
</script>


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
    
.product-item {
    cursor: pointer;
    transition: transform 0.2s ease;
}

.product-item:hover {
    transform: translateY(-3px);
}

img.producto-img {
    height: 300px !important;  
    width: 100% !important;
    object-fit: cover !important;
}

.modal-product-image {
    height: 400px !important;   
    max-width: 500px !important;
    width: 100% !important;
    object-fit: contain !important;
    display: block !important;
    margin: 0 auto !important;
}
</style>
@endpush

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endpush