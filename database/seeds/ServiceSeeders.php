<?php
use Faker\Factory as Faker;
use App\Service;
use Illuminate\Database\Seeder;

class ServiceSeeders extends Seeder
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
            $service->name = $faker->name;
            $service->description = $faker->text;
            $service->save();

        }
        

    }
}
