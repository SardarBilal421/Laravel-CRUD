<?php

namespace Database\Seeders;

use App\Models\NewTable;
use Illuminate\Database\Seeder;

class NewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        new_tables::factory(25)->create();
    }
}
