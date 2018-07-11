<?php

use Illuminate\Database\Seeder;
use App\MaterialFamily;

class MaterialFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MaterialFamily::create([
          'name'        => 'Plantas & Suelas',
        ]);

        MaterialFamily::create([
          'name'        => 'Pieles',
        ]);

        MaterialFamily::create([
          'name'        => 'Laminados',
        ]);

    }
}
