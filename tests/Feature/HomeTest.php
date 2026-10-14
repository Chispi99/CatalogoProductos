<?php

use App\Models\Product;

test('home page renders successfully with products', function () {
    Product::factory()->create([
        'name' => 'Peluche Pikachu Deluxe',
        'price' => 29.99,
        'category' => 'Generación I',
    ]);

    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertViewIs('home');
    $response->assertViewHas('products');
    $response->assertSee('Peluche Pikachu Deluxe');
    $response->assertSee('29,99 €');
});

test('home page displays seeded products and renders product cards', function () {
    $productA = Product::factory()->create([
        'name' => 'Peluche Snorlax Gigante',
        'price' => 59.99,
        'category' => 'Generación I',
    ]);

    $productB = Product::factory()->create([
        'name' => 'Peluche Charizard Alado XL',
        'price' => 49.99,
        'category' => 'Generación I',
    ]);

    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee($productA->name);
    $response->assertSee($productB->name);
    $response->assertSee('Añadir');
});

test('home page filters products by category', function () {
    Product::factory()->create([
        'name' => 'Peluche Bulbasaur Dormilón',
        'category' => 'Iniciales',
    ]);

    Product::factory()->create([
        'name' => 'Peluche Rayquaza Serpiente',
        'category' => 'Legendarios',
    ]);

    $response = $this->get('/?categoria=Iniciales');

    $response->assertStatus(200);
    $response->assertSee('Peluche Bulbasaur Dormilón');
    $response->assertDontSee('Peluche Rayquaza Serpiente');
});

test('home page renders interactive cart drawer and cart button', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
    $response->assertSee('id="cart-button"', false);
    $response->assertSee('id="cart-drawer-wrapper"', false);
    $response->assertSee('Carrito de Peluches');
    $response->assertSee('Tramitar Pedido');
    $response->assertSee('Tu Poké-mochila está vacía');
});
