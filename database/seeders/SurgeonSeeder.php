<?php

namespace Database\Seeders;

use App\Models\Surgeon;
use Illuminate\Database\Seeder;
use App\Enums\SeedersConstants as SC;

class SurgeonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Surgeon::factory(SC::SURGEONS_COUNT)->create();
    }
}
