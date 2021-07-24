<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewTable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        NewTable::factory(10)->create();
    }
}
