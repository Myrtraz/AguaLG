<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'name' => 'Unidad Peltre - Blanco',
            'price' => 375111,
            'stock' => 30,
            'type' => 'Filtro',
            'cover' => 'https://i.imgur.com/ymAbtrV.png',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Unidad Peltre - Azul Jaspeado',
            'price' => 375111,
            'stock' => 30,
            'type' => 'Filtro',
            'cover' => 'https://i.imgur.com/BYosPKG.png',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Unidad Peltre - Negro Jaspeado',
            'price' => 375111,
            'stock' => 30,
            'type' => 'Filtro',
            'cover' => 'https://i.imgur.com/GIa5McU.png',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Unidad Peltre - Azul Turquesa',
            'price' => 375111,
            'stock' => 30,
            'type' => 'Filtro',
            'cover' => 'https://i.imgur.com/tF1k2Xh.png',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Base Madera',
            'price' => 125111,
            'stock' => 15,
            'type' => 'Accesorio',
            'cover' => 'https://i.imgur.com/t8PtJQJ.jpg',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Mesa Madera',
            'price' => 160111,
            'stock' => 15,
            'type' => 'Accesorio',
            'cover' => 'https://i.imgur.com/fXPK0vh.jpg',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Base Metal Madera',
            'price' => 142111,
            'stock' => 15,
            'type' => 'Accesorio',
            'cover' => 'https://i.imgur.com/6eOSHnH.jpg',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Mesa Metal Madera',
            'price' => 232111,
            'stock' => 15,
            'type' => 'Accesorio',
            'cover' => 'https://i.imgur.com/AzrcRXZ.png',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Termo acero inoxidable - Negro Mate',
            'price' => 60111,
            'stock' => 10,
            'type' => 'Termo',
            'cover' => 'https://i.imgur.com/BBuhG4a.jpg',
            'is_product_on' => true
        ]);

        Product::create([
            'name' => 'Termo acero inoxidable - Turquesa',
            'price' => 60111,
            'stock' => 10,
            'type' => 'Termo',
            'cover' => 'https://i.imgur.com/6IcbZxz.jpg',
            'is_product_on' => true
        ]);
    }
}
