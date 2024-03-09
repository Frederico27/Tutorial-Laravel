<?php

namespace Database\Seeders;

use App\Models\Identidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IdentidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Identidade::factory()->count(10)->create();
    }
}
