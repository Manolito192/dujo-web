<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::updateOrCreate(['slug' => 'quienes-somos'], [
            'title' => '¿Quiénes Somos?',
            'content' => '<p>La industria cubana del mueble tiene en la <strong>Empresa DUJO</strong> algunas de esas fortalezas —y resultados— que necesita hoy la economía, y no por gusto la <strong>Contraloría General de la República</strong> la seleccionó para el experimento del control concurrente, que se realiza nacionalmente con vistas a evaluar la marcha de la Tarea Ordenamiento.</p><p>Con 11 Unidades Empresariales de Base (UEB) distribuidas por casi todo el país, esta entidad no ha tenido pérdidas y sí utilidades mes por mes. Desde el primer trimestre sus trabajadores recibieron como promedio 1 700 pesos y deben cerrar el año con cerca de los 3 000, al preverse una tendencia en aumento.</p><p>Esa proyección debe crecer con mayor producción y ofertas en los mercados a los que DUJO destina sus bienes y servicios: las inversiones en el turismo, el comercio electrónico en MLC, la Zona Especial de Desarrollo Mariel, las tiendas en MLC y las ventas a la población, además de continuar disminuyendo el personal indirecto, el cual supera el 30 % de los 2 300 trabajadores con que cuenta la industria.</p>',
        ]);
    }
}
