<?php

use App\Service;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayserv = ["Plomero","Electricista","Pintor","Cerrajero","Carpinteria"];
        $faker = Faker::create();
        for($i=0; $i < 5; $i++){
            $service = new Service();
            $service->name = $arrayserv[$i];
            $service->description = $faker->text;
            $service->active = true;
            $service->save();
        }
        //
    }
}
