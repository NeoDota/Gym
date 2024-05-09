<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Super Admin',
            'email'=>'superadmin@admin.com',
            'password'=> bcrypt('contraseña')
        ])/* ->assignRole('SuperAdmin') */;

        User::create([
            'name'=> 'Admin Standar',
            'email'=>'admin@admin.com',
            'password'=> bcrypt('contraseña')
        ])/* ->assignRole('Admin') */;

        User::create([
            'name'=> 'Ventas S',
            'email'=>'ventas@ventas.com',
            'password'=> bcrypt('contraseña')
        ])/* ->assignRole('Ventas') */;

        User::create([
            'name'=> 'cliente',
            'email'=>'cliente@cliente.com',
            'password'=> bcrypt('contraseña')
        ])/* ->assignRole('Ventas') */;

        User::factory(20)->create();
    }
}
