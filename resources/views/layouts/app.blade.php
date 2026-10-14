<!DOCTYPE html>
<html lang="es" class="h-full bg-amber-50/30 text-slate-800 antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="PlushDex - Tienda de peluches Pokémon oficiales de importación y primeras marcas. Envíos en 24/48 horas y garantía de devolución.">
    <title>@yield('title', 'PlushDex · Tienda de Peluches Pokémon Oficiales')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        display: ['Outfit', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#fffbeb',
                            100: '#fef3c7',
                            200: '#fde68a',
                            300: '#fcd34d',
                            400: '#fbbf24',
                            500: '#f59e0b',
                            600: '#d97706',
                            700: '#b45309',
                            800: '#92400e',
                            900: '#78350f',
                            950: '#451a03',
                        },
                        pokered: {
                            500: '#dc2626',
                            600: '#b91c1c',
                            700: '#991b1b',
                        },
                        pokeyellow: {
                            400: '#facc15',
                            500: '#eab308',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            font-family: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
        }
        h1, h2, h3, h4, .font-heading {
            font-family: 'Outfit', system-ui, -apple-system, sans-serif;
        }
        .glass-nav {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .product-card-shadow {
            box-shadow: 0 4px 20px -2px rgba(15, 23, 42, 0.06), 0 2px 6px -1px rgba(15, 23, 42, 0.04);
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .product-card-shadow:hover {
            box-shadow: 0 20px 30px -10px rgba(220, 38, 38, 0.12), 0 8px 16px -4px rgba(15, 23, 42, 0.06);
            transform: translateY(-4px);
        }
        .badge-gradient {
            background: linear-gradient(135deg, #dc2626 0%, #facc15 100%);
        }
        .hero-mesh {
            background-color: #1c1917;
            background-image:
                radial-gradient(at 0% 0%, rgba(220, 38, 38, 0.3) 0px, transparent 50%),
                radial-gradient(at 100% 0%, rgba(250, 204, 21, 0.2) 0px, transparent 50%),
                radial-gradient(at 50% 100%, rgba(220, 38, 38, 0.15) 0px, transparent 50%);
        }
    </style>
</head>
<body class="min-h-full flex flex-col bg-amber-50/30 text-slate-800">

    <aside aria-label="Aviso comercial" class="bg-stone-900 text-white text-xs font-medium py-2 px-4 border-b border-stone-800">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-2 text-center sm:text-left">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center justify-center px-2 py-0.5 text-[10px] font-bold bg-red-500/30 text-red-300 rounded-full border border-red-400/30 uppercase tracking-wide">
                    OFERTA
                </span>
                <span>Envío gratis en compras a partir de 30 € a toda la península</span>
            </div>
            <div class="flex items-center gap-4 text-stone-400">
                <a href="#catalogo" class="hover:text-white transition-colors">Peluches 100% originales</a>
                <span>•</span>
                <a href="#catalogo" class="hover:text-white transition-colors">Devolución en 30 días</a>
            </div>
        </div>
    </aside>

    <header class="sticky top-0 z-40 glass-nav border-b border-stone-200/80 transition-all">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20 gap-4">

                <div class="flex items-center gap-3">
                    <a href="{{ route('home') }}" class="flex items-center gap-3 group focus:outline-none focus:ring-2 focus:ring-red-500 rounded-xl p-1" id="logo-link">
                        <div class="w-11 h-11 rounded-2xl bg-gradient-to-tr from-red-600 via-red-500 to-yellow-400 flex items-center justify-center text-white shadow-lg shadow-red-500/25 group-hover:scale-105 transition-transform">
                            <span class="text-xl">🧸</span>
                        </div>
                        <div>
                            <span class="font-heading text-2xl font-bold tracking-tight text-stone-900 group-hover:text-red-600 transition-colors">
                                Plush<span class="text-red-600">Dex</span>
                            </span>
                            <span class="block text-[10px] font-semibold text-stone-400 tracking-widest uppercase -mt-1">Peluches Oficiales</span>
                        </div>
                    </a>
                </div>

                <nav class="hidden md:flex items-center gap-1 font-medium text-sm text-stone-600" aria-label="Navegación principal">
                    <a href="{{ route('home') }}" class="px-3.5 py-2 rounded-xl text-red-600 bg-red-50/80 font-semibold transition-colors">
                        Inicio
                    </a>
                    <a href="{{ route('home') }}#catalogo" class="px-3.5 py-2 rounded-xl hover:text-red-600 hover:bg-stone-100 transition-colors">
                        Todos los Peluches
                    </a>
                    <a href="{{ route('home', ['categoria' => 'Generación I']) }}" class="px-3.5 py-2 rounded-xl hover:text-red-600 hover:bg-stone-100 transition-colors">
                        Generación I
                    </a>
                    <a href="{{ route('home', ['categoria' => 'Legendarios']) }}" class="px-3.5 py-2 rounded-xl hover:text-red-600 hover:bg-stone-100 transition-colors">
                        Legendarios
                    </a>
                    <a href="{{ route('home', ['categoria' => 'Evoluciones Eevee']) }}" class="px-3.5 py-2 rounded-xl hover:text-red-600 hover:bg-stone-100 transition-colors">
                        Evoluciones Eevee
                    </a>
                </nav>

                <div class="flex items-center gap-3">
                    <button type="button" aria-label="Lista de deseos" class="p-2.5 rounded-xl text-stone-600 hover:text-red-600 hover:bg-stone-100 relative transition-colors focus:outline-none focus:ring-2 focus:ring-red-500 cursor-pointer">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 rounded-full bg-rose-500"></span>
                    </button>

                    <button type="button" id="cart-button" onclick="toggleCart(true)" class="flex items-center gap-2.5 px-3.5 py-2 rounded-xl bg-stone-900 hover:bg-red-600 text-white text-sm font-semibold shadow-md shadow-stone-900/10 transition-all hover:shadow-red-500/25 focus:outline-none focus:ring-2 focus:ring-red-500 cursor-pointer" aria-label="Abrir carrito de compra">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="hidden sm:inline">Carrito</span>
                        <span id="cart-count" class="w-5 h-5 rounded-full bg-red-600 text-white text-xs flex items-center justify-center font-bold transition-transform">0</span>
                    </button>
                </div>

            </div>
        </div>
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    <div id="cart-drawer-wrapper" class="fixed inset-0 z-50 pointer-events-none transition-opacity duration-300 opacity-0" aria-labelledby="cart-title" role="dialog" aria-modal="true">
        <div id="cart-backdrop" onclick="toggleCart(false)" class="absolute inset-0 bg-stone-950/60 backdrop-blur-sm transition-opacity duration-300 opacity-0 cursor-pointer"></div>

        <div class="fixed inset-y-0 right-0 max-w-full flex pl-10">
            <div id="cart-panel" class="w-screen max-w-md bg-white shadow-2xl flex flex-col transform translate-x-full transition-transform duration-300 ease-in-out pointer-events-auto">
                
                <div class="px-6 py-5 bg-stone-900 text-white flex items-center justify-between border-b border-stone-800">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-red-600 to-yellow-400 flex items-center justify-center text-white shadow-md text-lg">
                            🧸
                        </div>
                        <div>
                            <h2 id="cart-title" class="font-heading text-lg font-bold">Carrito de Peluches</h2>
                            <p class="text-xs text-stone-400">
                                <span id="cart-items-count-text">0 artículos</span> seleccionados
                            </p>
                        </div>
                    </div>
                    <button 
                        type="button" 
                        onclick="toggleCart(false)" 
                        class="p-2 rounded-xl text-stone-400 hover:text-white hover:bg-stone-800 transition-colors focus:outline-none focus:ring-2 focus:ring-red-500 cursor-pointer"
                        aria-label="Cerrar carrito"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <div id="shipping-banner" class="px-6 py-3 bg-amber-50 border-b border-amber-200/60 text-xs font-medium text-stone-700">
                    <div class="flex items-center justify-between mb-1.5">
                        <span id="shipping-message">Envío gratis en compras superiores a 30 €</span>
                        <span id="shipping-progress-percent" class="font-bold text-amber-800">0%</span>
                    </div>
                    <div class="w-full bg-stone-200 rounded-full h-1.5 overflow-hidden">
                        <div id="shipping-progress-bar" class="bg-gradient-to-r from-yellow-400 to-red-500 h-1.5 rounded-full transition-all duration-300" style="width: 0%"></div>
                    </div>
                </div>

                <div id="cart-items-container" class="flex-1 overflow-y-auto p-6 space-y-4 divide-y divide-stone-100">
                </div>

                <div id="cart-empty-state" class="hidden flex-1 flex-col items-center justify-center p-8 text-center space-y-4">
                    <div class="w-20 h-20 rounded-3xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-3xl shadow-inner">
                        💤
                    </div>
                    <div class="space-y-1">
                        <h3 class="font-heading text-lg font-bold text-stone-900">Tu Poké-mochila está vacía</h3>
                        <p class="text-xs text-stone-500 max-w-xs mx-auto leading-relaxed">
                            No tienes artículos en tu cesta. Añade productos desde nuestro catálogo para continuar.
                        </p>
                    </div>
                    <button 
                        type="button" 
                        onclick="toggleCart(false); const cat = document.getElementById('catalogo'); if (cat) cat.scrollIntoView({behavior: 'smooth'});"
                        class="px-5 py-2.5 rounded-xl bg-red-600 hover:bg-red-500 text-white text-xs font-bold shadow-md shadow-red-600/20 transition-all hover:-translate-y-0.5 cursor-pointer"
                    >
                        Ver Catálogo de Peluches
                    </button>
                </div>

                <div id="cart-footer" class="p-6 bg-stone-50 border-t border-stone-200 space-y-4">
                    <div class="space-y-2 text-sm">
                        <div class="flex items-center justify-between text-stone-500">
                            <span>Subtotal</span>
                            <span id="cart-subtotal" class="font-semibold text-stone-800">0,00 €</span>
                        </div>
                        <div class="flex items-center justify-between text-stone-500">
                            <span>Gastos de envío</span>
                            <span id="cart-shipping" class="font-semibold text-emerald-600">3,95 €</span>
                        </div>
                        <div class="pt-2 border-t border-stone-200 flex items-center justify-between text-base font-bold text-stone-900">
                            <span>Total</span>
                            <span id="cart-total" class="font-heading text-xl text-red-600 font-extrabold">0,00 €</span>
                        </div>
                    </div>

                    <div class="space-y-2 pt-1">
                        <button 
                            type="button" 
                            id="btn-checkout"
                            onclick="openCheckoutModal()"
                            class="w-full py-3.5 px-4 rounded-xl bg-red-600 hover:bg-red-500 active:scale-[0.98] text-white font-bold text-sm shadow-xl shadow-red-600/25 transition-all flex items-center justify-center gap-2 cursor-pointer"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Tramitar Pedido</span>
                        </button>
                        
                        <div class="flex items-center justify-between pt-1 text-xs">
                            <button 
                                type="button" 
                                onclick="clearCart()" 
                                class="text-stone-400 hover:text-rose-600 transition-colors font-medium flex items-center gap-1 cursor-pointer"
                            >
                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                </svg>
                                <span>Vaciar cesta</span>
                            </button>
                            <button 
                                type="button" 
                                onclick="toggleCart(false)" 
                                class="text-red-600 hover:text-red-700 font-semibold cursor-pointer"
                            >
                                Seguir comprando &rarr;
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="checkout-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-stone-950/70 backdrop-blur-sm transition-opacity duration-300">
        <div class="bg-white rounded-3xl max-w-md w-full p-6 sm:p-8 text-center space-y-5 shadow-2xl border border-stone-100 transform transition-all">
            <div class="w-16 h-16 mx-auto rounded-2xl bg-gradient-to-tr from-emerald-500 to-teal-400 text-white flex items-center justify-center text-3xl shadow-lg shadow-emerald-500/25">
                ✓
            </div>
            <div class="space-y-2">
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold bg-emerald-100 text-emerald-800">
                    Pedido Confirmado
                </span>
                <h3 class="font-heading text-2xl font-extrabold text-stone-900">
                    ¡Gracias por tu pedido!
                </h3>
                <p class="text-xs text-stone-500 max-w-sm mx-auto leading-relaxed">
                    Hemos recibido tu solicitud y la prepararemos para su envío en las próximas 24 horas.
                </p>
            </div>

            <div class="p-4 bg-stone-50 rounded-2xl border border-stone-200/80 text-left space-y-2 text-xs">
                <div class="flex justify-between">
                    <span class="text-stone-400">Referencia de pedido:</span>
                    <span id="order-number" class="font-mono font-bold text-stone-800">PKM-78492</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-stone-400">Total abonado:</span>
                    <span id="order-total" class="font-bold text-red-600">0,00 €</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-stone-400">Plazo de entrega:</span>
                    <span class="font-semibold text-stone-800">24 / 48 horas laborables</span>
                </div>
            </div>

            <button 
                type="button" 
                onclick="closeCheckoutModal()"
                class="w-full py-3.5 rounded-xl bg-stone-900 hover:bg-stone-800 text-white font-bold text-xs uppercase tracking-wider transition-all cursor-pointer"
            >
                Cerrar y volver a la tienda
            </button>
        </div>
    </div>

    <div id="toast" class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 pointer-events-none">
        <div class="bg-stone-900 text-white px-5 py-3.5 rounded-2xl shadow-2xl flex items-center gap-3.5 border border-stone-700/60 max-w-md pointer-events-auto">
            <div class="w-8 h-8 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
            <span id="toast-message" class="text-xs sm:text-sm font-medium flex-1"></span>
            <button 
                type="button" 
                id="toast-cart-btn"
                onclick="toggleCart(true)"
                class="px-3 py-1.5 rounded-lg bg-red-600 hover:bg-red-500 text-white text-xs font-bold transition-colors whitespace-nowrap cursor-pointer"
            >
                Ver Carrito
            </button>
        </div>
    </div>

    <footer class="bg-stone-900 text-stone-300 pt-16 pb-12 border-t border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-stone-800">

                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-red-600 to-yellow-400 flex items-center justify-center text-white shadow-md">
                            <span class="text-lg">🧸</span>
                        </div>
                        <span class="font-heading text-2xl font-bold tracking-tight text-white">
                            Plush<span class="text-red-400">Dex</span>
                        </span>
                    </div>
                    <p class="text-sm text-stone-400 leading-relaxed max-w-md">
                        Tienda especializada en peluches Pokémon oficiales de importación y primeras marcas. Envíos directos desde España con servicio de atención al cliente personalizado.
                    </p>
                    <div class="pt-1 text-xs text-stone-400">
                        <span>Horario de atención: Lunes a Viernes de 9:00 a 18:00</span>
                    </div>
                </div>

                <div>
                    <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-4 font-heading">Categorías</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="{{ route('home', ['categoria' => 'Generación I']) }}" class="hover:text-red-400 transition-colors">Generación I</a></li>
                        <li><a href="{{ route('home', ['categoria' => 'Iniciales']) }}" class="hover:text-red-400 transition-colors">Pokémon Iniciales</a></li>
                        <li><a href="{{ route('home', ['categoria' => 'Legendarios']) }}" class="hover:text-red-400 transition-colors">Legendarios</a></li>
                        <li><a href="{{ route('home', ['categoria' => 'Evoluciones Eevee']) }}" class="hover:text-red-400 transition-colors">Evoluciones Eevee</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-4 font-heading">Atención al Cliente</h3>
                    <ul class="space-y-2.5 text-sm">
                        <li><a href="#catalogo" class="hover:text-red-400 transition-colors">Seguimiento de pedidos</a></li>
                        <li><a href="#catalogo" class="hover:text-red-400 transition-colors">Envíos y plazos</a></li>
                        <li><a href="#catalogo" class="hover:text-red-400 transition-colors">Devoluciones y cambios</a></li>
                        <li><a href="#catalogo" class="hover:text-red-400 transition-colors">Aviso legal y privacidad</a></li>
                        <li><a href="#catalogo" class="hover:text-red-400 transition-colors">Contacto</a></li>
                    </ul>
                </div>

                <div>
                    <h3 class="text-sm font-bold text-white uppercase tracking-wider mb-4 font-heading">Boletín de novedades</h3>
                    <p class="text-xs text-stone-400 mb-3">Suscríbete para recibir noticias de reposiciones y ediciones limitadas.</p>
                    <form onsubmit="event.preventDefault(); showToast('Suscripción confirmada');" class="space-y-2">
                        <input type="email" placeholder="Introduce tu email" required class="w-full px-3.5 py-2.5 text-sm bg-stone-800/90 border border-stone-700 rounded-xl text-white placeholder-stone-500 focus:outline-none focus:ring-2 focus:ring-red-500">
                        <button type="submit" class="w-full py-2.5 bg-red-600 hover:bg-red-500 text-white rounded-xl text-xs font-bold uppercase tracking-wider transition-colors shadow-lg shadow-red-600/30 cursor-pointer">
                            Suscribirme
                        </button>
                    </form>
                </div>

            </div>

            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-stone-400">
                <p>&copy; {{ date('Y') }} PlushDex. Todos los derechos reservados. Marcas y licencias corresponden a sus respectivos propietarios.</p>
                <div class="flex items-center gap-3">
                    <span class="px-2.5 py-1 bg-stone-800 rounded-md font-semibold text-stone-300">VISA</span>
                    <span class="px-2.5 py-1 bg-stone-800 rounded-md font-semibold text-stone-300">Mastercard</span>
                    <span class="px-2.5 py-1 bg-stone-800 rounded-md font-semibold text-stone-300">PayPal</span>
                    <span class="px-2.5 py-1 bg-stone-800 rounded-md font-semibold text-stone-300">Apple Pay</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        const CART_STORAGE_KEY = 'plushdex_cart_v1';
        const FREE_SHIPPING_THRESHOLD = 30.00;
        const STANDARD_SHIPPING_COST = 3.95;

        function getCart() {
            try {
                const raw = localStorage.getItem(CART_STORAGE_KEY);
                return raw ? JSON.parse(raw) : [];
            } catch (e) {
                return [];
            }
        }

        function saveCart(cart) {
            try {
                localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(cart));
            } catch (e) {
                // Ignore storage quota errors
            }
            updateCartUI();
        }

        function formatCurrency(amount) {
            return new Intl.NumberFormat('es-ES', {
                style: 'currency',
                currency: 'EUR'
            }).format(amount);
        }

        function toggleCart(open = null) {
            const wrapper = document.getElementById('cart-drawer-wrapper');
            const backdrop = document.getElementById('cart-backdrop');
            const panel = document.getElementById('cart-panel');
            if (!wrapper || !backdrop || !panel) return;

            const isCurrentlyOpen = !wrapper.classList.contains('pointer-events-none');
            const shouldOpen = open !== null ? open : !isCurrentlyOpen;

            if (shouldOpen) {
                wrapper.classList.remove('pointer-events-none', 'opacity-0');
                wrapper.classList.add('pointer-events-auto', 'opacity-100');
                backdrop.classList.remove('opacity-0');
                backdrop.classList.add('opacity-100');
                panel.classList.remove('translate-x-full');
                panel.classList.add('translate-x-0');
                document.body.classList.add('overflow-hidden');
            } else {
                panel.classList.remove('translate-x-0');
                panel.classList.add('translate-x-full');
                backdrop.classList.remove('opacity-100');
                backdrop.classList.add('opacity-0');
                wrapper.classList.remove('pointer-events-auto', 'opacity-100');
                wrapper.classList.add('pointer-events-none', 'opacity-0');
                document.body.classList.remove('overflow-hidden');
            }
        }

        function addToCart(id, name, price, image) {
            if (typeof price === 'string') {
                const numericPrice = parseFloat(price.replace(/[^\d.,]/g, '').replace(',', '.')) || 0;
                return addToCart(Date.now(), id, numericPrice, 'https://meccha-japan.com/842524-large_default/plush-pikachu-pokemon-center-taipei.jpg');
            }

            const cart = getCart();
            const existingIndex = cart.findIndex(item => item.id === id || item.name === name);

            if (existingIndex > -1) {
                cart[existingIndex].quantity += 1;
            } else {
                cart.push({
                    id: id,
                    name: name,
                    price: parseFloat(price) || 0,
                    image: image || 'https://meccha-japan.com/842524-large_default/plush-pikachu-pokemon-center-taipei.jpg',
                    quantity: 1
                });
            }

            saveCart(cart);

            const cartCountEl = document.getElementById('cart-count');
            if (cartCountEl) {
                cartCountEl.classList.add('scale-125', 'bg-yellow-400', 'text-stone-900');
                setTimeout(() => {
                    cartCountEl.classList.remove('scale-125', 'bg-yellow-400', 'text-stone-900');
                }, 300);
            }

            showToast(`"${name}" añadido al carrito`, true);
        }

        function updateItemQuantity(index, delta) {
            const cart = getCart();
            if (!cart[index]) return;

            cart[index].quantity += delta;
            if (cart[index].quantity <= 0) {
                const removedName = cart[index].name;
                cart.splice(index, 1);
                showToast(`"${removedName}" eliminado`);
            }

            saveCart(cart);
        }

        function removeCartItem(index) {
            const cart = getCart();
            if (!cart[index]) return;
            const removedName = cart[index].name;
            cart.splice(index, 1);
            saveCart(cart);
            showToast(`"${removedName}" eliminado`);
        }

        function clearCart() {
            const cart = getCart();
            if (cart.length === 0) return;
            saveCart([]);
            showToast('Cesta vaciada');
        }

        function updateCartUI() {
            const cart = getCart();
            const totalItems = cart.reduce((acc, item) => acc + item.quantity, 0);

            const cartCountEl = document.getElementById('cart-count');
            if (cartCountEl) {
                cartCountEl.textContent = totalItems;
            }

            const itemsCountText = document.getElementById('cart-items-count-text');
            if (itemsCountText) {
                itemsCountText.textContent = `${totalItems} ${totalItems === 1 ? 'artículo' : 'artículos'}`;
            }

            const itemsContainer = document.getElementById('cart-items-container');
            const emptyState = document.getElementById('cart-empty-state');
            const footer = document.getElementById('cart-footer');
            const shippingBanner = document.getElementById('shipping-banner');

            if (cart.length === 0) {
                if (itemsContainer) itemsContainer.innerHTML = '';
                if (emptyState) {
                    emptyState.classList.remove('hidden');
                    emptyState.classList.add('flex');
                }
                if (footer) footer.classList.add('hidden');
                if (shippingBanner) shippingBanner.classList.add('hidden');
                return;
            }

            if (emptyState) {
                emptyState.classList.add('hidden');
                emptyState.classList.remove('flex');
            }
            if (footer) footer.classList.remove('hidden');
            if (shippingBanner) shippingBanner.classList.remove('hidden');

            const subtotal = cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
            const isFreeShipping = subtotal >= FREE_SHIPPING_THRESHOLD;
            const shippingCost = isFreeShipping ? 0 : STANDARD_SHIPPING_COST;
            const grandTotal = subtotal + shippingCost;

            const shippingMsg = document.getElementById('shipping-message');
            const shippingBar = document.getElementById('shipping-progress-bar');
            const shippingPercent = document.getElementById('shipping-progress-percent');
            const progressPercent = Math.min(100, Math.round((subtotal / FREE_SHIPPING_THRESHOLD) * 100));

            if (shippingBar) shippingBar.style.width = `${progressPercent}%`;
            if (shippingPercent) shippingPercent.textContent = `${progressPercent}%`;

            if (shippingMsg) {
                if (isFreeShipping) {
                    shippingMsg.innerHTML = '<span class="text-emerald-700 font-bold">¡Envío gratuito conseguido!</span>';
                } else {
                    const remaining = FREE_SHIPPING_THRESHOLD - subtotal;
                    shippingMsg.innerHTML = `Faltan <strong>${formatCurrency(remaining)}</strong> para disfrutar de <strong>envío gratis</strong>`;
                }
            }

            const subtotalEl = document.getElementById('cart-subtotal');
            const shippingEl = document.getElementById('cart-shipping');
            const totalEl = document.getElementById('cart-total');

            if (subtotalEl) subtotalEl.textContent = formatCurrency(subtotal);
            if (shippingEl) {
                if (isFreeShipping) {
                    shippingEl.textContent = 'GRATIS';
                    shippingEl.className = 'font-bold text-emerald-600';
                } else {
                    shippingEl.textContent = formatCurrency(STANDARD_SHIPPING_COST);
                    shippingEl.className = 'font-semibold text-stone-700';
                }
            }
            if (totalEl) totalEl.textContent = formatCurrency(grandTotal);

            if (itemsContainer) {
                itemsContainer.innerHTML = cart.map((item, index) => `
                    <div class="pt-4 first:pt-0 flex items-center gap-3.5 group">
                        <div class="w-16 h-16 rounded-2xl bg-white border border-stone-200/80 p-1.5 flex items-center justify-center flex-shrink-0 overflow-hidden shadow-sm">
                            <img 
                                src="${item.image}" 
                                alt="${item.name}" 
                                class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-200"
                            />
                        </div>

                        <div class="flex-1 min-w-0">
                            <h4 class="font-heading text-sm font-bold text-stone-900 truncate" title="${item.name}">
                                ${item.name}
                            </h4>
                            <p class="text-xs text-stone-500 font-medium">
                                ${formatCurrency(item.price)} ud.
                            </p>

                            <div class="flex items-center gap-2 mt-2">
                                <div class="inline-flex items-center rounded-lg border border-stone-200 bg-stone-50">
                                    <button 
                                        type="button" 
                                        onclick="updateItemQuantity(${index}, -1)" 
                                        class="w-7 h-7 flex items-center justify-center text-stone-600 hover:text-red-600 hover:bg-stone-100 rounded-l-lg transition-colors font-bold text-sm focus:outline-none cursor-pointer"
                                        aria-label="Disminuir cantidad"
                                    >
                                        -
                                    </button>
                                    <span class="w-8 text-center text-xs font-bold text-stone-800">
                                        ${item.quantity}
                                    </span>
                                    <button 
                                        type="button" 
                                        onclick="updateItemQuantity(${index}, 1)" 
                                        class="w-7 h-7 flex items-center justify-center text-stone-600 hover:text-red-600 hover:bg-stone-100 rounded-r-lg transition-colors font-bold text-sm focus:outline-none cursor-pointer"
                                        aria-label="Aumentar cantidad"
                                    >
                                        +
                                    </button>
                                </div>

                                <span class="text-xs font-bold text-stone-900 ml-auto">
                                    ${formatCurrency(item.price * item.quantity)}
                                </span>
                            </div>
                        </div>

                        <button 
                            type="button" 
                            onclick="removeCartItem(${index})" 
                            class="p-2 text-stone-400 hover:text-rose-600 hover:bg-rose-50 rounded-xl transition-colors focus:outline-none cursor-pointer"
                            aria-label="Eliminar ${item.name}"
                            title="Eliminar producto"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                `).join('');
            }
        }

        function openCheckoutModal() {
            const cart = getCart();
            if (cart.length === 0) return;

            const subtotal = cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
            const shipping = subtotal >= FREE_SHIPPING_THRESHOLD ? 0 : STANDARD_SHIPPING_COST;
            const total = subtotal + shipping;

            const orderNumEl = document.getElementById('order-number');
            const orderTotalEl = document.getElementById('order-total');
            if (orderNumEl) orderNumEl.textContent = 'PKM-' + Math.floor(10000 + Math.random() * 90000);
            if (orderTotalEl) orderTotalEl.textContent = formatCurrency(total);

            toggleCart(false);

            const modal = document.getElementById('checkout-modal');
            if (modal) {
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.classList.add('overflow-hidden');
            }

            saveCart([]);
        }

        function closeCheckoutModal() {
            const modal = document.getElementById('checkout-modal');
            if (modal) {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.classList.remove('overflow-hidden');
            }
        }

        let toastTimeout = null;
        function showToast(message, showCartButton = false) {
            const toast = document.getElementById('toast');
            const messageEl = document.getElementById('toast-message');
            const cartBtn = document.getElementById('toast-cart-btn');
            if (!toast || !messageEl) return;

            messageEl.textContent = message;

            if (cartBtn) {
                if (showCartButton) {
                    cartBtn.classList.remove('hidden');
                } else {
                    cartBtn.classList.add('hidden');
                }
            }

            toast.classList.remove('translate-y-24', 'opacity-0', 'pointer-events-none');
            toast.classList.add('translate-y-0', 'opacity-100', 'pointer-events-auto');

            if (toastTimeout) clearTimeout(toastTimeout);
            toastTimeout = setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100', 'pointer-events-auto');
                toast.classList.add('translate-y-24', 'opacity-0', 'pointer-events-none');
            }, 3600);
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                toggleCart(false);
                closeCheckoutModal();
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            updateCartUI();
        });
    </script>
</body>
</html>
