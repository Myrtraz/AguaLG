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
            'price' => 375.001,
            'type' => 'Filtro',
            'cover' => 'https://i.imgur.com/ymAbtrV.png',
        ]);

        Product::create([
            'name' => 'Unidad Peltre - Azul Jaspeado',
            'price' => 375.001,
            'type' => 'Filtro',
            'cover' => 'https://i.imgur.com/BYosPKG.png',
        ]);

        Product::create([
            'name' => 'Unidad Peltre - Negro Jaspeado',
            'price' => 375.001,
            'type' => 'Filtro',
            'cover' => 'https://i.imgur.com/GIa5McU.png',
        ]);

        Product::create([
            'name' => 'Unidad Peltre - Azul Turquesa',
            'price' => 375.001,
            'type' => 'Filtro',
            'cover' => 'https://i.imgur.com/tF1k2Xh.png',
        ]);

        Product::create([
            'name' => 'Base Madera',
            'price' => 125.001,
            'type' => 'Accesorio',
            'cover' => 'https://i.imgur.com/t8PtJQJ.jpg',
        ]);

        Product::create([
            'name' => 'Mesa Madera',
            'price' => 160.001,
            'type' => 'Accesorio',
            'cover' => 'https://i.imgur.com/fXPK0vh.jpg',
        ]);

        Product::create([
            'name' => 'Base Metal Madera',
            'price' => 142.001,
            'type' => 'Accesorio',
            'cover' => 'https://i.imgur.com/6eOSHnH.jpg',
        ]);

        Product::create([
            'name' => 'Mesa Metal Madera',
            'price' => 232.001,
            'type' => 'Accesorio',
            'cover' => 'https://i.imgur.com/AzrcRXZ.png',
        ]);

        Product::create([
            'name' => 'Termo acero inoxidable - Negro Mate',
            'price' => 60.001,
            'type' => 'Termo',
            'cover' => 'https://i.imgur.com/BBuhG4a.jpg',
        ]);

        Product::create([
            'name' => 'Termo acero inoxidable - Turquesa',
            'price' => 60.001,
            'type' => 'Termo',
            'cover' => 'https://i.imgur.com/6IcbZxz.jpg',
        ]);
    }
}
