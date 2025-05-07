<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    public function run()
    {
        $nombresProductos = [
            'Laptop HP', 'Smartphone Samsung', 'Teclado inalámbrico', 
            'Mouse gamer', 'Monitor 24"', 'Impresora láser', 
            'Disco duro 1TB', 'Memoria USB 64GB', 'Router WiFi', 
            'Cargador portátil'
        ];

        $estados = ['activo', 'inactivo', 'agotado', 'disponible', 'en reposición'];

        for ($i = 0; $i < 10; $i++) {
            Producto::create([
                'name' => $nombresProductos[array_rand($nombresProductos)],
                'status' => $estados[array_rand($estados)]
            ]);
        }

        $this->command->info('¡10 productos de prueba creados exitosamente!');
    }
}
