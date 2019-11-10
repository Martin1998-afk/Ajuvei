<?php
use Faker\Factory as Faker;
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
            $prestamista->apellidop = $faker->lastName;
            $prestamista->apellidom = $faker->lastName;
            $prestamista->email = $faker->unique()->email;
            $prestamista->service = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $prestamista->cellphone = $faker->tollFreePhoneNumber;
            $prestamista->description = $faker->paragraph($nbSentences = 3, $variableNbSentences = true);
            $prestamista->colonia = $faker->citySuffix;
            $prestamista->calle = $faker->streetName;
            $prestamista->numext = $faker->buildingNumber;
            $prestamista->cp = $faker->postcode;
            $prestamista->save();
        }
    }
}
