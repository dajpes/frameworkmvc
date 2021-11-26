<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class rolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'key' => 'admin',
            'name' => 'Rol Administrativo',
            'description' => 'Tiene algunos permisos en el sistema',
        ]);

        DB::table('roles')->insert([
            'key' => 'invitado',
            'name' => 'Rol Invitado',
            'description' => 'Tiene algunos permisos en el sistema',
        ]);
    }
}
