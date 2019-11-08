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
        $faker = Faker::create();
        for($i=0; $i < 5; $i++){
            $service = new Service();
            $service->name = $faker->word;
            $service->description = $faker->text;
            $service->save();
        }
        //
    }
}
