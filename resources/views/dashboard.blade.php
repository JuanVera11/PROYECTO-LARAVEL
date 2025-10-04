@extends('layouts.app')
@section('module', 'Métricas')

@section('content')

<style>
    .dashboard-card {
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background-color: #fff;
    }
    .metric-value {
        font-size: 2.5rem;
        font-weight: bold;
    }
    .metric-title {
        font-size: 1rem;
        color: #6c757d;
    }
    .chart-container {
        position: relative;
        height: 40vh;
        width: 100%;
        margin-bottom: 30px;
    }
    .text-primary { color: #4e73df!important; }
    .text-success { color: #1cc88a!important; }
    .text-info { color: #36b9cc!important; }
    .text-warning { color: #f6c23e!important; }
    .text-gray-900 { color: #1c1c1c!important; }
    .text-gray-300 { color: #dddfeb!important; }
</style>

<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<div class="container-fluid">

    <h1 class="h3 mb-4 text-gray-800">Resumen de Métricas de Productos y Órdenes</h1>

    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="dashboard-card">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Productos Registrados
                        </div>
                        <div id="total-products" class="metric-value text-gray-900">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-boxes fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="dashboard-card">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Productos Disponibles
                        </div>
                        <div id="available-products" class="metric-value text-gray-900">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-check-circle fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="dashboard-card">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Órdenes Totales</div>
                        <div id="total-orders" class="metric-value text-gray-900">0</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="dashboard-card">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Ingresos Totales (Est.)
                        </div>
                        <div id="total-revenue" class="metric-value text-gray-900">$0.00</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">

        <div class="col-xl-6 col-lg-6">
            <div class="dashboard-card">
                <h6 class="m-0 font-weight-bold text-primary text-center">Top 5 Usuarios con más Órdenes</h6>
                <div class="chart-container">
                    <canvas id="topUsersChart"></canvas>
                </div>
            </div>
        </div>
        
        <div class="col-xl-6 col-lg-6">
            <div class="dashboard-card">
                <h6 class="m-0 font-weight-bold text-primary text-center">Top 5 Productos más Ordenados</h6>
                <div class="chart-container">
                    <canvas id="topProductsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        {{-- GRÁFICO 1: Disponibilidad de Productos --}}
        <div class="col-xl-6 col-lg-6">
            <div class="dashboard-card">
                <h6 class="m-0 font-weight-bold text-primary text-center">Disponibilidad de Productos</h6>
                <div class="chart-container">
                    <canvas id="productAvailabilityChart"></canvas>
                </div>
            </div>
        </div>
        
        {{-- GRÁFICO 2: Productos Más Costosos (Nuevo) --}}
        <div class="col-xl-6 col-lg-6">
            <div class="dashboard-card">
                <h6 class="m-0 font-weight-bold text-primary text-center">Top 5 Productos Más Costosos</h6>
                <div class="chart-container">
                    <canvas id="mostExpensiveProductsChart"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

@section('script')
<script>
    const productsData = [
        { id: 1, name: 'Resorte de Juguete', price: 20000, available: 1 },
        { id: 2, name: 'Pedigree 2kg', price: 25000, available: 1 },
        { id: 3, name: 'Kit Juguetes', price: 50000, available: 1 },
        { id: 4, name: 'Juguete dinamico', price: 3000, available: 1 },
        { id: 5, name: 'Perritos Juguete', price: 40000, available: 1 },
        { id: 6, name: 'Cama ortopédica', price: 45000, available: 1 },
        { id: 7, name: 'Alimento Chunky 3kg', price: 32000, available: 1 },
        { id: 8, name: 'Máquina Alimento', price: 24000, available: 1 },
        { id: 9, name: 'Jaula de Hamster', price: 150000, available: 1 },
        { id: 10, name: 'Vitagraim Alimento', price: 24000, available: 1 },
        { id: 11, name: 'Julio de Hamster', price: 18000, available: 1 },
        { id: 12, name: 'Chunky Pollo 1.5Kg', price: 28000, available: 1 },
        { id: 13, name: 'Hueso De Goma', price: 15000, available: 1 },
        { id: 14, name: 'Croquetas', price: 65000, available: 1 },
        { id: 15, name: 'Pedigree Adultos', price: 18000, available: 1 },
    ];
    
    const usersData = [
        { id: 10, name: 'Juan Esteban' },
        { id: 20, name: 'Andres' },
        { id: 30, name: 'Yeson Arles' },
        { id: 40, name: 'Monica Yohana' },
        { id: 50, name: 'Jessica Alejandra' },
    ];
    
    const ordersData = [
        { id: 12, user_id: 10, product_id: 9, total: 150000 },
        { id: 15, user_id: 20, product_id: 6, total: 45000 },
        { id: 17, user_id: 30, product_id: 7, total: 32000 },
        { id: 18, user_id: 40, product_id: 10, total: 24000 },
        { id: 19, user_id: 50, product_id: 2, total: 25000 },
        { id: 21, user_id: 60, product_id: 3, total: 28000 },

    ];
    
    function prepareAnalyticsData(products, orders, users) {
        
        const totalProducts = products.length;
        const availableProducts = products.filter(p => p.available == 1).length; 
        const totalOrders = orders.length;
        const totalRevenue = orders.reduce((sum, order) => sum + parseFloat(order.total), 0);

        const unavailableProducts = totalProducts - availableProducts;
        const availabilityData = {
            labels: ['Disponible', 'No Disponible'],
            data: [availableProducts, unavailableProducts],
            backgroundColor: ['#1cc88a', '#e74a3b'],
            hoverBackgroundColor: ['#17a673', '#d03123'],
        };

        const productSales = orders.reduce((acc, order) => {
            const product = products.find(p => p.id == order.product_id);
            const productName = product ? product.name : `Producto ID ${order.product_id}`;
            
            acc[productName] = (acc[productName] || 0) + 1;
            return acc;
        }, {});

        const sortedProducts = Object.entries(productSales)
            .sort(([, countA], [, countB]) => countB - countA)
            .slice(0, 5);
        
        const topProductsData = {
            labels: sortedProducts.map(item => item[0]), 
            data: sortedProducts.map(item => item[1]), 
        };
        
        const userOrdersCount = orders.reduce((acc, order) => {
            const user = users.find(u => u.id == order.user_id);
            const userName = user ? user.name : `Usuario ID ${order.user_id}`;
            
            acc[userName] = (acc[userName] || 0) + 1;
            return acc;
        }, {});

        const sortedUsers = Object.entries(userOrdersCount)
            .sort(([, countA], [, countB]) => countB - countA)
            .slice(0, 5);
        
        const topUsersData = {
            labels: sortedUsers.map(item => item[0]), 
            data: sortedUsers.map(item => item[1]), 
        };
        
        // CÁLCULO DE PRODUCTOS MÁS COSTOSOS (NUEVO)
        const mostExpensiveProducts = products.slice() // Copia el array para no modificar el original
            .sort((a, b) => b.price - a.price) // Ordena de mayor a menor precio
            .slice(0, 5); // Toma el Top 5

        const mostExpensiveData = {
            labels: mostExpensiveProducts.map(p => p.name),
            data: mostExpensiveProducts.map(p => p.price),
        };


        return {
            totalProducts, availableProducts, totalOrders, totalRevenue, 
            availabilityData, topProductsData, topUsersData, mostExpensiveData
        };
    }

    const analyticsData = prepareAnalyticsData(productsData, ordersData, usersData);

    document.getElementById('total-products').innerText = analyticsData.totalProducts;
    document.getElementById('available-products').innerText = analyticsData.availableProducts;
    document.getElementById('total-orders').innerText = analyticsData.totalOrders;
    document.getElementById('total-revenue').innerText = '$' + analyticsData.totalRevenue.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",");

    
    const ctxTopUsers = document.getElementById('topUsersChart').getContext('2d');
    new Chart(ctxTopUsers, {
        type: 'bar',
        data: {
            labels: analyticsData.topUsersData.labels,
            datasets: [{
                label: 'Número de Órdenes',
                data: analyticsData.topUsersData.data,
                backgroundColor: 'rgba(54, 185, 204, 0.8)',
                borderColor: 'rgba(54, 185, 204, 1)',
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false, responsive: true,
            plugins: { legend: { display: false } },
            scales: { x: { grid: { display: false } }, y: { beginAtZero: true, ticks: { stepSize: 1 } } }
        },
    });


    const ctxTopProducts = document.getElementById('topProductsChart').getContext('2d');
    new Chart(ctxTopProducts, {
        type: 'bar',
        data: {
            labels: analyticsData.topProductsData.labels,
            datasets: [{
                label: 'Número de Órdenes',
                data: analyticsData.topProductsData.data,
                backgroundColor: 'rgba(78, 115, 223, 0.8)',
                borderColor: 'rgba(78, 115, 223, 1)',
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false, responsive: true,
            plugins: { legend: { display: false } },
            scales: { x: { grid: { display: false } }, y: { beginAtZero: true, ticks: { stepSize: 1 } } }
        },
    });
    
    const ctxAvailability = document.getElementById('productAvailabilityChart').getContext('2d');
    new Chart(ctxAvailability, {
        type: 'doughnut',
        data: {
            labels: analyticsData.availabilityData.labels,
            datasets: [{
                data: analyticsData.availabilityData.data,
                backgroundColor: analyticsData.availabilityData.backgroundColor,
                hoverBackgroundColor: analyticsData.availabilityData.hoverBackgroundColor,
            }],
        },
        options: {
            maintainAspectRatio: false, responsive: true,
            plugins: {
                legend: { position: 'bottom' },
                tooltip: { callbacks: { label: function(context) { return context.label + ': ' + context.raw + ' productos'; } } }
            },
        },
    });

    // --- GRÁFICO D: Productos Más Costosos (Nuevo) ---
    const ctxMostExpensive = document.getElementById('mostExpensiveProductsChart').getContext('2d');
    new Chart(ctxMostExpensive, {
        type: 'bar', // Puede ser 'bar' o 'horizontalBar' (si usas Chart.js v2) o 'bar' con indexAxis: 'y' (si usas Chart.js v4)
        data: {
            labels: analyticsData.mostExpensiveData.labels,
            datasets: [{
                label: 'Precio',
                data: analyticsData.mostExpensiveData.data,
                backgroundColor: 'rgba(246, 194, 62, 0.8)', // Warning/Amarillo
                borderColor: 'rgba(246, 194, 62, 1)',
                borderWidth: 1
            }]
        },
        options: {
            maintainAspectRatio: false, responsive: true,
            indexAxis: 'y', // Hace las barras horizontales si usas Chart.js v4
            plugins: { 
                legend: { display: false },
                tooltip: { 
                    callbacks: {
                        label: function(context) {
                            let value = context.raw.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                            return 'Precio: $' + value;
                        }
                    }
                }
            },
            scales: { 
                x: { 
                    beginAtZero: true,
                    ticks: {
                        callback: function(value, index, values) {
                            return '$' + value.toFixed(0).replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                        }
                    }
                },
                y: { grid: { display: false } }
            }
        },
    });

</script>
@endsection