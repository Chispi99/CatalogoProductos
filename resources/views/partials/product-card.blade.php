@props(['product'])

<article class="group bg-white rounded-2xl border border-stone-200/80 overflow-hidden product-card-shadow flex flex-col h-full transition-all duration-300">
    <div class="relative w-full aspect-[4/3] bg-white flex items-center justify-center p-3 overflow-hidden border-b border-stone-100">
        <img 
            src="{{ $product->image_url }}" 
            alt="{{ $product->name }}" 
            loading="lazy"
            class="relative z-0 max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300 ease-out"
        />

        <div class="absolute top-3 left-3 right-3 flex items-center justify-between pointer-events-none">
            <div class="flex flex-col gap-1.5 items-start">
                <span class="inline-flex items-center px-2.5 py-1 rounded-lg text-xs font-semibold bg-white/95 text-stone-800 shadow-sm backdrop-blur-md">
                    {{ $product->category }}
                </span>

                @if ($product->is_featured)
                    <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-lg text-[11px] font-bold text-white badge-gradient shadow-sm">
                        <svg class="w-3 h-3 text-amber-300 fill-current" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        Destacado
                    </span>
                @endif
            </div>

            <button 
                type="button" 
                aria-label="Añadir a lista de deseos"
                onclick="this.classList.toggle('text-rose-500'); this.classList.toggle('text-slate-400'); showToast('Lista de deseos actualizada')"
                class="pointer-events-auto w-8 h-8 rounded-full bg-white/90 text-stone-400 hover:text-rose-500 shadow-sm flex items-center justify-center transition-colors focus:outline-none focus:ring-2 focus:ring-red-500 backdrop-blur-sm cursor-pointer"
            >
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </button>
        </div>

        <div class="absolute bottom-3 left-3">
            @if ($product->stock < 10)
                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[11px] font-semibold bg-amber-500/90 text-white shadow-sm backdrop-blur-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                    Últimas {{ $product->stock }} uds
                </span>
            @else
                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-600/90 text-white shadow-sm backdrop-blur-sm">
                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                    En Stock ({{ $product->stock }})
                </span>
            @endif
        </div>
    </div>

    <div class="p-5 flex flex-col flex-grow justify-between gap-4">
        <div class="space-y-2">
            <div class="flex items-center justify-between text-xs text-stone-500">
                <div class="flex items-center gap-1 text-amber-500">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <span class="font-bold text-stone-700">{{ number_format((float) $product->rating, 1) }}</span>
                    <span class="text-stone-400">({{ $product->reviews_count }})</span>
                </div>
                <span class="text-[11px] text-stone-400 font-medium">PKM-{{ str_pad($product->id, 4, '0', STR_PAD_LEFT) }}</span>
            </div>

            <h3 class="font-heading text-lg font-bold text-stone-900 group-hover:text-red-600 transition-colors line-clamp-1" title="{{ $product->name }}">
                {{ $product->name }}
            </h3>

            <p class="text-xs text-stone-500 line-clamp-2 leading-relaxed">
                {{ $product->description }}
            </p>
        </div>

        <div class="pt-3 border-t border-stone-100 flex items-center justify-between gap-2 mt-auto">
            <div>
                <span class="block text-[11px] uppercase tracking-wider font-semibold text-stone-400">Precio</span>
                <div class="flex items-baseline gap-1.5">
                    <span class="font-heading text-xl font-bold text-stone-900 tracking-tight">
                        {{ $product->formatted_price }}
                    </span>
                    @if ($product->is_featured)
                        <span class="text-xs text-stone-400 line-through">
                            {{ number_format((float) $product->price * 1.2, 2, ',', '.') }} €
                        </span>
                    @endif
                </div>
            </div>

            <button 
                type="button"
                id="btn-add-{{ $product->id }}"
                onclick="addToCart({{ $product->id }}, '{{ addslashes($product->name) }}', {{ (float) $product->price }}, '{{ addslashes($product->image_url) }}')"
                class="inline-flex items-center justify-center gap-1.5 px-3.5 py-2.5 rounded-xl bg-red-600 hover:bg-red-700 active:scale-95 text-white text-xs font-bold transition-all shadow-md shadow-red-600/20 hover:shadow-red-600/30 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-1 cursor-pointer"
                aria-label="Añadir {{ $product->name }} al carrito"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                </svg>
                <span>Añadir</span>
            </button>
        </div>
    </div>
</article>
