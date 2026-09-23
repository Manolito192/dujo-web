<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name' => 'Saily Rodriguez Lam', 'role' => 'Directora General', 'email' => 'saily@dujo.cu', 'photo' => '/img/team/saily.jpg'],
            ['name' => 'Gustavo Ramirez Camejo', 'role' => 'Director Adjunto', 'email' => 'gustavor@dujo.cu', 'photo' => '/img/team/gustavo.jpg'],
            ['name' => 'Mailys Espinar', 'role' => 'Directora de Operaciones', 'email' => 'mailys@dujo.cu', 'photo' => '/img/team/mailys.jpg'],
            ['name' => 'Silvia Valdés Hernández', 'role' => 'Directora Contable', 'email' => 'silvia@dujo.cu', 'photo' => '/img/team/silvia.jpg'],
            ['name' => 'Frank Fuente Ferreiro', 'role' => 'Director de Capital Humano', 'email' => 'frank@dujo.cu', 'photo' => '/img/team/frank.jpg'],
            ['name' => 'Lisandra Valdés Cartaya', 'role' => 'Directora de Auditoría', 'email' => 'lisandra@dujo.cu', 'photo' => '/img/team/lisandra.jpg'],
            ['name' => 'Juan Carlos Velázquez Cayón', 'role' => 'Ingeniería y Desarrollo', 'email' => 'juancarlos@dujo.cu', 'photo' => '/img/team/juancarlos.jpg'],
        ];

        foreach ($members as $i => $member) {
            TeamMember::updateOrCreate(
                ['email' => $member['email']],
                array_merge($member, ['sort_order' => $i + 1])
            );
        }
    }
}
