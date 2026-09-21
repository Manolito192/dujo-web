<?php

namespace Database\Seeders;

use App\Models\SiteContent;
use Illuminate\Database\Seeder;

class SiteContentSeeder extends Seeder
{
    public function run(): void
    {
        $contents = [
            'home_hero_subtitle' => 'Empresa Industria Cubana del Mueble',
            'home_about_title' => '¿Quiénes Somos?',
            'home_about_text' => 'DUJO produce y comercializa mobiliario con diversidad de estilos y clase, presta servicios de diseño, decoración y proyectos integrados para el mercado interno y externo. Se caracteriza por una adecuada relación calidad-precio y una alta competitividad; satisface las necesidades y expectativas de sus clientes, contando con un personal altamente comprometido y capacitado, contribuyendo al bienestar de la sociedad cubana.',
            'home_vision_title' => 'Visión',
            'home_vision_text' => 'Ser líder en la producción y comercialización de mobiliario, con presencia en el mercado nacional e internacional, caracterizado por la excelencia, la calidad e integralidad de sus producciones y servicios, el diseño en sus organizaciones productivas, con un alto compromiso y visión de trabajo en equipo.',
            'home_muebleria_title' => 'Mueblería',
            'home_muebleria_text' => 'En la Mueblería DUJO ponemos a tu disposición los mejores muebles del mercado, garantizamos la comodidad de tu propio hogar, comercializamos mobiliario con diversidad de estilos y clase, muebles modernos, muebles de calidad.',
            'muebleria_online_url' => 'https://www.muebleriadujo.com/',
            'catalogos_2025_url' => 'https://www.dujo.cu/dl/DUJO_CATALOGO_2025.pdf',
            'catalogos_2023_url' => 'https://www.dujo.cu/dl/CATALOGO_DUJO2023.pdf',
            'contact_company' => 'Empresa Industria Cubana del Mueble DUJO',
            'contact_address' => 'Ave. 26 No. 852 esq. a Calle 41, Nuevo Vedado, Plaza, La Habana, Cuba',
            'contact_phone' => '(+53) 7881 7490',
            'contact_email' => 'direccion@dujo.cu',
            'footer_org' => 'GEMPIL | MINDUS',
            'social_facebook' => 'https://www.facebook.com/arteycomodidad',
            'social_twitter' => 'https://twitter.com/@mueblesdujo',
        ];

        foreach ($contents as $key => $value) {
            SiteContent::updateOrCreate(['key' => $key], ['value' => $value]);
        }
    }
}
