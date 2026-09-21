<?php

namespace Database\Seeders;

use App\Models\Ueb;
use Illuminate\Database\Seeder;

class UebSeeder extends Seeder
{
    public function run(): void
    {
        $uebs = [
            [
                'slug' => 'muebleria-dujo',
                'name' => 'Mueblería DUJO',
                'province' => null,
                'logo' => '/img/logo/logo_dujo_min2.svg',
                'image' => '/img/photos/galeria1.jpg',
                'intro' => 'Los mejores muebles del mercado para la comodidad de tu propio hogar.',
                'content' => '<p>En la Mueblería DUJO ponemos a tu disposición los mejores muebles del mercado, garantizamos la comodidad de tu propio hogar, comercializamos mobiliario con diversidad de estilos y clase, muebles modernos, muebles de calidad, producidos por la Empresa Industria Cubana del Mueble DUJO.</p>',
                'website' => 'https://www.muebleriadujo.com/',
                'sort_order' => 1,
            ],
            [
                'slug' => 'muebles-habana-pallares',
                'name' => 'Muebles Habana "Pallarés"',
                'province' => 'La Habana',
                'logo' => '/img/ueb/muebles_habana.svg',
                'image' => null,
                'intro' => 'Producción de todo tipo de mobiliario con más de cuatro décadas de experiencia.',
                'content' => '<p>En 1980 se le proporciona la categoría de Empresa y no es hasta el año 2002 que pasa a la producción de todo tipo de mobiliarios. En el año 2015 se anexa como UEB a la Empresa Industria Cubana del Mueble, DUJO.</p><p>Este centro ha sido galardonado con la bandera Héroes del Moncada, el Colectivo Vanguardia Nacional y la bandera de la Rentabilidad, entre otros reconocimientos que puede conocer visitando la entidad.</p>',
                'address' => 'Calle 103 No. 808 entre calle 8 y Lindero, Reparto La Torre, Cotorro, La Habana',
                'sort_order' => 2,
            ],
            [
                'slug' => 'signo',
                'name' => 'SIGNO: Muebles y Artículos Varios',
                'province' => 'Batabanó',
                'logo' => '/img/ueb/signo.svg',
                'image' => '/img/ueb/signo-factory.jpg',
                'intro' => 'Producción de muebles y artículos varios con tradición desde 1961.',
                'content' => '<p>El 26 de julio de 1960 se iniciaron los trabajos de construcción de las primeras instalaciones de lo que en la actualidad se denomina UEB Muebles y Artículos Varios "Signo", en las tierras que fueron donadas por el campesino Raimundo Medero. Los lápices de la fábrica eran elaborados con cedro cubano y llevaban la marca "Mítico", como cariñosamente se le llamaba a José Ángel Fernández.</p><p>El 30 de marzo de 1961 fue fundada por el Comandante Ernesto Che Guevara como industria destinada a la fabricación de lápices, adscrita al Ministerio de Industria. Al crearse el 7 de junio de 1967, se denomina como la Empresa Muebles Escolares, y en el año 1989 se dispone el nombre de Empresa Muebles y Artículos Varios "SIGNO".</p><p>Desde su fundación la UEB ha evolucionado modificando sus productos de acuerdo a las expectativas del mercado y a las necesidades de la nación. Es por ello que su objetivo fundamental ha transitado por una amplia gama de productos que van desde la producción de lápices hasta las actuales producciones de bienes: muebles escolares, juegos de sala, juegos de comedor, muebles de cocina, envases de madera, entre otros.</p><p>Destinada fundamentalmente a diseñar, producir, ensamblar, montar, reparar, transportar y comercializar, de forma mayorista y en ambas monedas, muebles metálicos y de madera, así como envases de madera. Presta, además, servicios de secado de madera en ambas monedas.</p>',
                'mission' => 'Garantizar el confort y seguridad a nuestros clientes con productos de la industria del mueble y especialidades en madera que satisfagan sus expectativas de calidad, mediante un proceso de mejora continua del Sistema de Gestión Empresarial.',
                'vision' => 'Ser un líder de la industria cubana del mueble y proveedor reconocido de especialidades en madera, al distinguirnos por una elevada calidad que, sustentada con profesionalidad y ética, logra la lealtad de los clientes.',
                'address' => 'Batabanó, Apeadero San Manuel Km 1 ½, Mayabeque',
                'sort_order' => 3,
            ],
            [
                'slug' => 'lunasur',
                'name' => 'LUNASUR: Espejos, cristales y molduras',
                'province' => 'Cienfuegos',
                'logo' => '/img/ueb/lunasur.svg',
                'image' => null,
                'intro' => 'Producción de espejos, cristales y molduras. Fundada el 10 de diciembre de 1994.',
                'content' => '<p>Producción de espejos, cristales y molduras. Fundada el 10 de diciembre de 1994.</p>',
                'sort_order' => 4,
            ],
            [
                'slug' => 'muebles-madevic',
                'name' => 'Muebles MADEVIC',
                'province' => 'Villa Clara',
                'logo' => '/img/ueb/madevic.svg',
                'image' => null,
                'intro' => 'UEB de la Empresa Industria Cubana del Mueble DUJO en Villa Clara, dedicada a la producción de mobiliario.',
                'content' => '<p>Unidad Empresarial de Base de la Empresa Industria Cubana del Mueble DUJO en Villa Clara, dedicada a la producción de mobiliario.</p>',
                'sort_order' => 5,
            ],
            [
                'slug' => 'muebles-lidex',
                'name' => 'Muebles LÍDEX',
                'province' => 'Ciego de Ávila',
                'logo' => '/img/ueb/lidex.svg',
                'image' => null,
                'intro' => 'Empresa de muebles con tradición desde 1960, heredera de la primera cooperativa de carpinteros "Camilo Cienfuegos".',
                'content' => '<p>La Empresa Muebles LÍDEX de Ciego de Ávila se fundó el 8 de septiembre de 1960, con la creación de la primera cooperativa de carpinteros "Camilo Cienfuegos", antecedente directo de esta industria del mueble.</p><p>La Oficina del Historiador de la CTC, el 6 de febrero de 1999, dejó grabado en la tarja situada a la entrada de dicha entidad el aporte de los equipos eléctricos, útiles y herramientas propios de estos carpinteros, lo que constituye sin dudas un ejemplo de entrega, desinterés y apoyo rotundo a la Revolución Cubana que se gestaba en todo el país.</p>',
                'sort_order' => 6,
            ],
            [
                'slug' => 'muebles-ludema',
                'name' => 'Muebles LUDEMA',
                'province' => 'Las Tunas',
                'logo' => '/img/ueb/ludema.svg',
                'image' => null,
                'intro' => 'UEB que lleva el nombre del mártir Calixto Sarduy y abarca un área de 3 000 m².',
                'content' => '<p>La UEB Muebles LUDEMA, que lleva el nombre del mártir Calixto Sarduy, abarca un área de 3 000 m².</p><p>A partir de 1960 se comienza la construcción de una planta empacadora de algodón, la cual fue descontinuada por no ser satisfactoria su gestión económica para el desarrollo del país. Surge la necesidad de la fabricación de muebles para centros educacionales de las provincias orientales y se toma la decisión de adoptar estas construcciones para hacer una Empresa de Muebles Escolares. A partir de 1972 comenzó la etapa de construcción y montaje de equipos.</p>',
                'sort_order' => 7,
            ],
            [
                'slug' => 'muebles-acorde',
                'name' => 'Muebles ACORDE',
                'province' => 'Holguín',
                'logo' => '/img/ueb/acorde.svg',
                'image' => null,
                'intro' => 'Producción de muebles de madera y metálicos. Fundada en 1994.',
                'content' => '<p>Producción de muebles de madera y metálicos. Fundada en 1994.</p>',
                'sort_order' => 8,
            ],
            [
                'slug' => 'muebles-madesa',
                'name' => 'Muebles MADESA',
                'province' => 'Santiago de Cuba',
                'logo' => '/img/ueb/madesa.svg',
                'image' => null,
                'intro' => 'Unidad Empresarial de Base de la Empresa Industria Cubana del Mueble DUJO en Santiago de Cuba.',
                'content' => '<p>Unidad Empresarial de Base de la Empresa Industria Cubana del Mueble DUJO en Santiago de Cuba, dedicada a la producción de mobiliario.</p>',
                'sort_order' => 9,
            ],
            [
                'slug' => 'muebles-imperio',
                'name' => 'Muebles IMPERIO',
                'province' => 'Guantánamo',
                'logo' => '/img/ueb/imperio.svg',
                'image' => null,
                'intro' => 'Unidad Empresarial de Base de la Empresa Industria Cubana del Mueble DUJO en Guantánamo.',
                'content' => '<p>Unidad Empresarial de Base de la Empresa Industria Cubana del Mueble DUJO en Guantánamo, dedicada a la producción de mobiliario.</p>',
                'sort_order' => 10,
            ],
        ];

        foreach ($uebs as $ueb) {
            Ueb::updateOrCreate(['slug' => $ueb['slug']], $ueb);
        }
    }
}
