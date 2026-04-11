<?php

namespace Database\Seeders;
use App\Models\Creator;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Creator::factory(10)->hasCampaigns(3)->create();
        //Ý nghĩa
        // tạo 10 creator
        // mỗi creator có 3 campaign
    }
}
