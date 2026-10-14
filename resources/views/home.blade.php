@extends('layouts.app')

@section('title', 'PlushDex · Tienda de Peluches Pokémon Oficiales')

@section('content')

    <section class="hero-mesh text-white py-16 sm:py-24 relative overflow-hidden border-b border-stone-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="max-w-3xl space-y-6">

                <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-red-500/20 border border-red-400/30 text-red-300 text-xs font-semibold backdrop-blur-md">
                    <span class="w-2 h-2 rounded-full bg-yellow-400 animate-ping"></span>
                    <span>Colección Oficial 2026</span>
                </div>

                <h1 class="font-heading text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                    Tienda Oficial de <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-400 via-yellow-300 to-red-300">
                        Peluches Pokémon
                    </span>
                </h1>

                <p class="text-stone-300 text-base sm:text-lg leading-relaxed max-w-2xl font-light">
                    Descubre nuestra selección de peluches oficiales de importación y primeras marcas: iniciales clásicos, evoluciones de Eevee y Pokémon legendarios con acabados premium y tacto ultrasuave.
                </p>

                <div class="pt-2 flex flex-wrap items-center gap-4">
                    <a
                        href="#catalogo"
                        class="px-6 py-3.5 rounded-xl bg-red-600 hover:bg-red-500 text-white font-semibold text-sm shadow-xl shadow-red-600/30 hover:shadow-red-500/40 transition-all transform hover:-translate-y-0.5 focus:outline-none focus:ring-2 focus:ring-red-400"
                    >
                        Ver catálogo ({{ $products->count() }})
                    </a>
                    <a
                        href="{{ route('home', ['categoria' => 'Legendarios']) }}#catalogo"
                        class="px-6 py-3.5 rounded-xl bg-stone-800/80 hover:bg-stone-700/80 text-stone-200 border border-stone-700 font-semibold text-sm backdrop-blur-md transition-all focus:outline-none focus:ring-2 focus:ring-stone-500"
                    >
                        Pokémon Legendarios
                    </a>
                </div>

                <div class="pt-8 border-t border-stone-800/80 grid grid-cols-3 gap-6 max-w-lg">
                    <div>
                        <span class="font-heading text-2xl font-bold text-white block">+5.000</span>
                        <span class="text-xs text-stone-400">Pedidos enviados</span>
                    </div>
                    <div>
                        <span class="font-heading text-2xl font-bold text-white block">24 / 48h</span>
                        <span class="text-xs text-stone-400">Entrega en península</span>
                    </div>
                    <div>
                        <span class="font-heading text-2xl font-bold text-yellow-400 block">4.9 ★</span>
                        <span class="text-xs text-stone-400">Opiniones verificadas</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-white border-b border-stone-200/80 py-8" aria-label="Garantías de compra">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                <div class="flex items-center gap-4 p-3 rounded-2xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-2xl bg-red-50 text-red-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-sm text-stone-900">Envío Gratis</h4>
                        <p class="text-xs text-stone-500">En pedidos superiores a 30 €</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-3 rounded-2xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-2xl bg-yellow-50 text-yellow-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-sm text-stone-900">Licencia Oficial</h4>
                        <p class="text-xs text-stone-500">Productos Pokémon originales</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-3 rounded-2xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-2xl bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-sm text-stone-900">Devolución en 30 días</h4>
                        <p class="text-xs text-stone-500">Gestión ágil sin complicaciones</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 p-3 rounded-2xl hover:bg-stone-50 transition-colors">
                    <div class="w-12 h-12 rounded-2xl bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>
                    <div>
                        <h4 class="font-heading font-bold text-sm text-stone-900">Pago Seguro</h4>
                        <p class="text-xs text-stone-500">Pasarela cifrada SSL 256-bit</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="catalogo" class="py-16 scroll-mt-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">

            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-4 border-b border-stone-200">
                <div class="space-y-1">
                    <span class="text-xs font-bold uppercase tracking-wider text-red-600 font-heading">
                        Catálogo de Productos
                    </span>
                    <h2 class="font-heading text-3xl font-extrabold text-stone-900 tracking-tight">
                        Colección de Peluches
                    </h2>
                    <p class="text-sm text-stone-500 max-w-xl">
                        Modelos con licencia oficial, rellenos de microfibra hipoalergénica y acabados bordados de alta fidelidad.
                    </p>
                </div>

                <div class="flex items-center gap-2">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-stone-200/80 text-stone-700">
                        {{ $products->count() }} {{ $products->count() === 1 ? 'peluche' : 'peluches' }}
                    </span>
                    @if ($selectedCategory)
                        <a
                            href="{{ route('home') }}#catalogo"
                            class="text-xs text-red-600 hover:text-red-800 font-semibold underline underline-offset-2"
                        >
                            Ver todos (quitar filtro)
                        </a>
                    @endif
                </div>
            </div>

            <div class="flex items-center gap-2 overflow-x-auto pb-2 scrollbar-none" aria-label="Filtro de categorías">
                <a
                    href="{{ route('home') }}#catalogo"
                    class="px-4 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition-all focus:outline-none focus:ring-2 focus:ring-red-500 {{ empty($selectedCategory) ? 'bg-red-600 text-white shadow-md shadow-red-600/25' : 'bg-white text-stone-600 hover:bg-stone-100 border border-stone-200' }}"
                >
                    Todos
                </a>

                @foreach ($categories as $category)
                    <a
                        href="{{ route('home', ['categoria' => $category]) }}#catalogo"
                        class="px-4 py-2 rounded-xl text-xs font-bold whitespace-nowrap transition-all focus:outline-none focus:ring-2 focus:ring-red-500 {{ $selectedCategory === $category ? 'bg-red-600 text-white shadow-md shadow-red-600/25' : 'bg-white text-stone-600 hover:bg-stone-100 border border-stone-200' }}"
                    >
                        {{ $category }}
                    </a>
                @endforeach
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 sm:gap-8">
                @forelse ($products as $product)
                    @include('partials.product-card', ['product' => $product])
                @empty
                    <div class="col-span-full py-16 px-6 text-center bg-white rounded-3xl border border-stone-200/80 shadow-sm">
                        <div class="w-16 h-16 mx-auto mb-4 rounded-2xl bg-stone-100 text-stone-400 flex items-center justify-center">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                        </div>
                        <h3 class="font-heading text-lg font-bold text-stone-800 mb-1">No hay productos disponibles</h3>
                        <p class="text-sm text-stone-500 mb-6">No se encontraron artículos en la categoría "{{ $selectedCategory }}".</p>
                        <a
                            href="{{ route('home') }}#catalogo"
                            class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-red-600 text-white text-xs font-bold hover:bg-red-700 transition-colors"
                        >
                            Ver todo el catálogo
                        </a>
                    </div>
                @endforelse
            </div>

        </div>
    </section>

    <section class="py-16 bg-gradient-to-r from-red-900 via-red-800 to-stone-900 text-white relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center space-y-6">
            <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 text-yellow-300 text-xs font-bold uppercase tracking-wider backdrop-blur-md">
                Newsletter PlushDex
            </span>
            <h2 class="font-heading text-3xl sm:text-4xl font-extrabold max-w-2xl mx-auto">
                ¿Buscas ediciones especiales y reposiciones?
            </h2>
            <p class="text-stone-300 text-sm sm:text-base max-w-xl mx-auto">
                Suscríbete para recibir avisos de nuevos lanzamientos, importaciones desde Japón y promociones especiales directamente en tu correo.
            </p>
            <div class="pt-2 flex justify-center">
                <a
                    href="#catalogo"
                    class="px-8 py-3.5 rounded-xl bg-yellow-400 hover:bg-yellow-300 text-stone-950 font-bold text-sm shadow-xl shadow-yellow-400/20 transition-all transform hover:-translate-y-0.5"
                >
                    Explorar colección
                </a>
            </div>
        </div>
    </section>

@endsection
