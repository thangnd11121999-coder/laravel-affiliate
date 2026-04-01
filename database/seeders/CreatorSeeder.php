<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    \App\Models\Creator::factory(50)->create();
}

}
