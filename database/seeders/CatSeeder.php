<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    public function run(): void
    {   
        Cat::factory()->create([
            'name' => 'Megatron',
            'dob' => '2024-06-14',
            'owner_name' => 'Bob',
        ]);
    }
}
