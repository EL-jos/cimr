<?php

namespace Database\Seeders;

use App\Models\Leave;
use Database\Factories\LeaveFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Leave::factory(50)->create();
    }
}
