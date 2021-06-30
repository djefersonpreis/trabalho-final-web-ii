<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TodoGrupo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        TodoGrupo::factory()->count(10)->create();
    }
}
