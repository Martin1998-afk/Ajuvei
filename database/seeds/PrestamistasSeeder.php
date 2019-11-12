<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\prestamistas;


class PrestamistasSeeder extends Seeder
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
            $prestamista = new prestamistas();
            $prestamista->name = $faker->name;
            $prestamista->email = $faker->unique()->email;
            $prestamista->description = $faker->text($maxNbChars = 200);
            $prestamista->address = $faker->address();

        }
    }
}
