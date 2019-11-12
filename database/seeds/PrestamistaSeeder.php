<?php

use App\Prestamista;
use Illuminate\Database\Seeder;

class PrestamistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<5; $i++){
            $prestamista = new Prestamista();
            $prestamista->name = $faker->name;
            $prestamista->email = $faker->unique()->email;
            $prestamista->description = $faker->text($maxNbChars = 200);
            $prestamista->address = $faker->address();

        }
    }
}
