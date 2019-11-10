<?php

use App\Service;
use App\ServiceUser;
use App\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ServiceUsersSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $services = Service::all();
        $faker = Faker::create();
        $users = sizeof($users);
        $services = sizeof($services);
        $r = random_int(1,20);
        for ($i=0; $i < $r; $i++) { 
            $relation = new ServiceUser();
            $relation->service_id = $faker->numberBetween(1,$services);
            $relation->user_id = $faker->numberBetween(1,$users);
            $relation->active = true;
            $relation->save();
        }
    }
}
