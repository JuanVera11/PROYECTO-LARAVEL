<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página Principal - MASCOTIENDA @yield('module')</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('img/Mascotienda.png') }}">
</head>
<body class="antialiased fondo-landing">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
        @if (Route::has('login'))
        <div class="auth-buttons-container">
            @auth
            <a href="{{ route('dashboard') }}" class="btn btn-custom-blue">Dashboard</a>
            <a href="{{ route('orders.index') }}" class="btn btn-warning" style="background-color: #fd7e14 !important; border-color: #fd7e14 !important; color: white !important;">
                Ver mis Órdenes
            </a>
            <button id="viewCartBtn" class="btn btn-success position-relative" data-bs-toggle="modal" data-bs-target="#cartModal">
                <i class="fas fa-shopping-cart"></i> Carrito
                <span id="cartCount" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    0
                    <span class="visually-hidden">Productos en el carrito</span>
                </span>
            </button>
            @else
            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-outline-primary">Registrarse</a>
            @endif
            @endauth
        </div>
        @endif
        <main class="container py-5">
            <section class="hero-section text-center mb-5">
                <h1 class="display-4 fw-bold text-primary mb-3">
                    <div style="background-color: orange; width: 240px; height: 220px; border-radius: 70%; display: inline-flex; justify-content: center; align-items: center; margin: auto;">
                        <img src="{{ asset('img/Mascotienda.png') }}" alt="Logo de MascoTienda" style="width: 200px; height: 200px; object-fit: cover; border-radius: 50%;">
                    </div>
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
                        <div class="card h-100 shadow-sm product-card">
                            <img src="{{ asset('img/' . $product->photo) }}" class="card-img-top card-img-fixed-height" alt="{{ $product->name }}"
                                data-bs-toggle="modal"
                                data-bs-target="#productModal"
                                data-product-id="{{ $product->id }}"
                                data-product-name="{{ $product->name }}"
                                data-product-description="{{ $product->description }}"
                                data-product-price="{{ $product->price }}"
                                data-product-formatted-price="${{ number_format($product->price, 0, ',', '.') }}"
                                data-product-available="{{ $product->available ? 'Sí' : 'No' }}"
                                data-product-photo="{{ asset('img/' . $product->photo) }}"
                                style="cursor: pointer;">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <div class="mt-auto">
                                    <p class="price-tag fw-bold text-success fs-4 mb-2">${{ number_format($product->price, 0, ',', '.') }}</p>
                                    <p class="card-text small text-muted">Disponibilidad {{ $product->available ? 'Sí' : 'No' }}</p>
                                    
                                    <button class="btn btn-success btn-block add-to-cart-direct-btn w-100" 
                                        data-product-id="{{ $product->id }}"
                                        data-product-name="{{ $product->name }}"
                                        data-product-description="{{ $product->description }}"
                                        data-product-price="{{ $product->price }}"
                                        data-product-photo="{{ asset('img/' . $product->photo) }}">
                                        <i class="fas fa-cart-plus me-1"></i> Añadir al Carrito (x1)
                                    </button>
                                    
                                    <button class="btn btn-primary btn-block view-product-btn mt-2 w-100" 
                                        data-bs-toggle="modal"
                                        data-bs-target="#productModal"
                                        data-product-id="{{ $product->id }}"
                                        data-product-name="{{ $product->name }}"
                                        data-product-description="{{ $product->description }}"
                                        data-product-price="{{ $product->price }}"
                                        data-product-formatted-price="${{ number_format($product->price, 0, ',', '.') }}"
                                        data-product-available="{{ $product->available ? 'Sí' : 'No' }}"
                                        data-product-photo="{{ asset('img/' . $product->photo) }}">
                                        Ver Detalles
                                    </button>
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
                                
                                <form id="addToCartForm" class="mt-4">
                                    <input type="hidden" id="modalProductId" name="product_id">
                                    <input type="hidden" id="modalProductUnitName" name="product_name">
                                    <input type="hidden" id="modalProductUnitPrice" name="product_price">
                                    <input type="hidden" id="modalProductImageURL" name="product_photo_url"> 

                                    <div class="mb-3 d-flex align-items-center">
                                        <label for="productQuantity" class="form-label me-3">Cantidad:</label>
                                        <input type="number" class="form-control" id="productQuantity" name="quantity" value="1" min="1" style="width: 100px;" required>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary btn-lg w-100">
                                        <i class="fas fa-cart-plus me-2"></i> Añadir al Carrito
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title" id="cartModalLabel"><i class="fas fa-shopping-cart"></i> Tu Carrito de Compras</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="cartContent">
                            
                        </div>
                        <div id="cartEmptyMessage" class="alert alert-info text-center d-none">
                            Tu carrito está vacío.
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h4 class="text-end">Total a Pagar: <span id="cartTotal" class="text-success fw-bold">$0</span></h4>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Seguir Comprando</button>
                        
                        <form id="checkoutForm" class="d-flex gap-2">
                            <input type="text" class="form-control" id="checkoutAddress" placeholder="Dirección de Entrega" required style="width: 300px;">
                            <button type="submit" class="btn btn-warning btn-lg" id="checkoutBtn">
                                <i class="fas fa-check-circle me-1"></i> Comprar Ya y Validar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <style>
            body {
                font-family: 'Poppins', sans-serif;
                background-image: url('https://images.unsplash.com/photo-1450778869180-41d0601e046e?w=1920&q=80');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                background-repeat: no-repeat;
                position: relative;
            }
            
            body::before {
                content: '';
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.92);
                z-index: -1;
            }
            
            .btn-custom-blue {
                background-color: #0056b3 !important;
                border-color: #0056b3 !important;
                color: white !important;
                font-weight: 600;
            }
            .btn-custom-blue:hover {
                background-color: #004085 !important;
                border-color: #004085 !important;
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
                transition: transform 0.3s ease-in-out;
            }
            
            .card-img-top, .view-product-btn {
                cursor: pointer;
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

            footer {
                padding: 10px 0;
                border-top: 1px solid #e9ecef;
                box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.05);
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
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <script>
        const STORAGE_KEY = 'mascotienda_cart';
        
        function getCart() {
            const cartData = localStorage.getItem(STORAGE_KEY);
            return cartData ? JSON.parse(cartData) : {};
        }

        function saveCart(cart) {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(cart));
            updateCartDisplay();
        }

        function updateCartDisplay() {
            const cart = getCart();
            const count = Object.values(cart).reduce((sum, item) => sum + item.quantity, 0);
            document.getElementById('cartCount').textContent = count;
            document.getElementById('cartCount').classList.toggle('d-none', count === 0);
        }
        
        function formatPrice(price) {
            return '$' + new Intl.NumberFormat('es-CO').format(price);
        }

        function renderCart() {
            const cart = getCart();
            const cartContent = document.getElementById('cartContent');
            const cartTotalSpan = document.getElementById('cartTotal');
            const checkoutBtn = document.getElementById('checkoutBtn');
            const cartEmptyMessage = document.getElementById('cartEmptyMessage');
            let html = '';
            let total = 0;

            if (Object.keys(cart).length === 0) {
                cartEmptyMessage.classList.remove('d-none');
                checkoutBtn.disabled = true; 
                cartContent.innerHTML = '';
            } else {
                cartEmptyMessage.classList.add('d-none');
                checkoutBtn.disabled = false;
                
                html += `
                    <table class="table table-striped table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Foto</th> <th>Producto</th>
                                <th>Descripción</th>
                                <th>Precio Unitario</th>
                                <th>Cantidad</th>
                                <th>Subtotal</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                `;
                
                Object.values(cart).forEach(item => {
                    const subtotal = item.price * item.quantity;
                    total += subtotal;
                    
                    html += `
                        <tr>
                            <td><img src="${item.photoUrl}" alt="${item.name}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 5px;"></td> <td class="fw-bold">${item.name}</td>
                            <td>${item.description.substring(0, 50) + (item.description.length > 50 ? '...' : '')}</td>
                            <td>${formatPrice(item.price)}</td>
                            <td>
                                <input type="number" class="form-control form-control-sm update-quantity" 
                                    data-product-id="${item.id}" value="${item.quantity}" min="1" style="width: 70px;">
                            </td>
                            <td>${formatPrice(subtotal)}</td>
                            <td>
                                <button class="btn btn-danger btn-sm remove-item" data-product-id="${item.id}">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    `;
                });
                
                html += `</tbody></table>`;
                cartContent.innerHTML = html;
            }

            cartTotalSpan.textContent = formatPrice(total);
            
            document.querySelectorAll('.remove-item').forEach(btn => {
                btn.addEventListener('click', function() {
                    const productId = this.getAttribute('data-product-id');
                    removeItemFromCart(productId);
                });
            });
            
            document.querySelectorAll('.update-quantity').forEach(input => {
                input.addEventListener('change', function() {
                    const productId = this.getAttribute('data-product-id');
                    const quantity = parseInt(this.value);
                    if (quantity > 0) {
                        updateItemQuantity(productId, quantity);
                    } else {
                        this.value = 1; 
                        updateItemQuantity(productId, 1);
                    }
                });
            });
        }

        function addToCartDirect(productId, name, price, description, photoUrl) {
            const cart = getCart();
            const quantity = 1; 

            if (cart[productId]) {
                cart[productId].quantity += quantity;
                alert(`${name}: Cantidad actualizada a ${cart[productId].quantity} en el carrito.`);
            } else {
                cart[productId] = {
                    id: productId,
                    name: name,
                    description: description.substring(0, 50) + (description.length > 50 ? '...' : ''), 
                    price: price,
                    quantity: quantity,
                    photoUrl: photoUrl 
                };
                alert(`${name} añadido al carrito.`);
            }
            
            saveCart(cart);
        }
        
        document.getElementById('addToCartForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const productId = document.getElementById('modalProductId').value;
            const name = document.getElementById('modalProductUnitName').value;
            const price = parseFloat(document.getElementById('modalProductUnitPrice').value);
            const description = document.getElementById('modalProductDescription').textContent;
            const quantity = parseInt(document.getElementById('productQuantity').value);
            const photoUrl = document.getElementById('modalProductImageURL').value; 
            
            const cart = getCart();
            
            if (cart[productId]) {
                cart[productId].quantity += quantity;
            } else {
                cart[productId] = {
                    id: productId,
                    name: name,
                    description: description,
                    price: price,
                    quantity: quantity,
                    photoUrl: photoUrl 
                };
            }
            
            saveCart(cart);
            
            const productModalEl = document.getElementById('productModal');
            const productModal = bootstrap.Modal.getInstance(productModalEl);
            productModal.hide();
            
            alert(`${quantity} x ${name} añadido al carrito!`);
        });

        function removeItemFromCart(productId) {
            let cart = getCart();
            if (cart[productId]) {
                delete cart[productId];
                saveCart(cart);
                renderCart(); 
            }
        }

        function updateItemQuantity(productId, quantity) {
            let cart = getCart();
            if (cart[productId] && quantity > 0) { 
                cart[productId].quantity = quantity;
                saveCart(cart);
                renderCart(); 
            }
        }

        document.getElementById('checkoutForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const address = document.getElementById('checkoutAddress').value;
            const cart = getCart();
            const totalItems = Object.keys(cart).length;
            
            if (totalItems === 0) {
                alert('El carrito está vacío. No se puede procesar la compra.');
                return;
            }
            
            alert(`¡COMPRA VALIDADA Y SIMULADA!\n\nSe ha generado su orden de ${totalItems} productos para la dirección:\n${address}\n\nGracias por su compra.`);
            
            localStorage.removeItem(STORAGE_KEY);
            updateCartDisplay();
            
            const cartModalEl = document.getElementById('cartModal');
            const cartModal = bootstrap.Modal.getInstance(cartModalEl);
            cartModal.hide();
        });

        document.addEventListener('DOMContentLoaded', function() {
            updateCartDisplay(); 

            document.querySelectorAll('.add-to-cart-direct-btn').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.stopPropagation(); 

                    const id = this.getAttribute('data-product-id');
                    const name = this.getAttribute('data-product-name');
                    const price = parseFloat(this.getAttribute('data-product-price'));
                    const description = this.getAttribute('data-product-description');
                    const photoUrl = this.getAttribute('data-product-photo');

                    addToCartDirect(id, name, price, description, photoUrl);
                });
            });


            const productModalEl = document.getElementById('productModal');
            
            productModalEl.addEventListener('show.bs.modal', function(event) {
                const element = event.relatedTarget; 
                
                const id = element.getAttribute('data-product-id');
                const name = element.getAttribute('data-product-name');
                const description = element.getAttribute('data-product-description');
                const price = element.getAttribute('data-product-price');
                const formattedPrice = element.getAttribute('data-product-formatted-price');
                const available = element.getAttribute('data-product-available');
                const photo = element.getAttribute('data-product-photo');

                document.getElementById('modalProductId').value = id;
                document.getElementById('modalProductUnitName').value = name;
                document.getElementById('modalProductUnitPrice').value = price;
                document.getElementById('modalProductImageURL').value = photo; 
                document.getElementById('modalProductName').textContent = name;
                document.getElementById('modalProductDescription').textContent = description;
                document.getElementById('modalProductPrice').textContent = formattedPrice;
                document.getElementById('modalProductAvailability').textContent = available;
                document.getElementById('modalProductImage').src = photo;
                document.getElementById('productQuantity').value = 1; 
            });
            
            const cartModalEl = document.getElementById('cartModal');
            cartModalEl.addEventListener('show.bs.modal', function() {
                renderCart();
            });
        });
    </script>
</body>
</html>