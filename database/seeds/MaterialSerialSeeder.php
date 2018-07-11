<?php

use Illuminate\Database\Seeder;
use App\MaterialSerial;

class MaterialSerialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MaterialSerial::create([
          'size' => 0,
        ]);

        factory(MaterialSerial::class,30)->create();

    }
}
