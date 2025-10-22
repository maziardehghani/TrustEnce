<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'maziar dehghani',
            'email' => 'admin@gmail.com',
            'password' => 'patmat',
            'is_admin' => true,
        ]);
    }
}
