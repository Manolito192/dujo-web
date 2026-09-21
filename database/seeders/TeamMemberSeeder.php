<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        $members = [
            ['name' => 'Antonio García', 'role' => 'Director General', 'email' => 'tony@dujo.cu', 'photo' => '/img/team/tony.jpg'],
            ['name' => 'Roselio Margolles', 'role' => 'Director Adjunto', 'email' => 'margolles@dujo.cu', 'photo' => '/img/team/margolles.jpg'],
            ['name' => 'Mailys Espinar', 'role' => 'Directora de Operaciones', 'email' => 'mailys@dujo.cu', 'photo' => '/img/team/mailys.jpg'],
            ['name' => 'Silvia Valdés Hernández', 'role' => 'Directora Contable', 'email' => 'silvia@dujo.cu', 'photo' => '/img/team/silvia.jpg'],
            ['name' => 'Lisandra Valdés Cartaya', 'role' => 'Directora de Capital Humano', 'email' => 'lisandra@dujo.cu', 'photo' => '/img/team/lisandra.jpg'],
            ['name' => 'Yamilé Magaña Caña', 'role' => 'Directora de Auditoría', 'email' => 'yamilemc@dujo.cu', 'photo' => '/img/team/yamile.jpg'],
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
