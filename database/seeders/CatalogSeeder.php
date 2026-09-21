<?php

namespace Database\Seeders;

use App\Models\Catalog;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    public function run(): void
    {
        $catalogs = [
            ['title' => 'Catálogo de Productos 2025', 'file' => 'https://www.dujo.cu/dl/DUJO_CATALOGO_2025.pdf', 'sort_order' => 1],
            ['title' => 'Catálogo de Productos 2023', 'file' => 'https://www.dujo.cu/dl/CATALOGO_DUJO2023.pdf', 'sort_order' => 2],
        ];

        foreach ($catalogs as $catalog) {
            Catalog::updateOrCreate(['title' => $catalog['title']], $catalog);
        }
    }
}
