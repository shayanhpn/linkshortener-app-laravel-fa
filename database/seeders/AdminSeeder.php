<?php

namespace Database\Seeders;

use App\Models\User;
use Hekmatinasser\Verta\Facades\Verta;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create();
    }
}
