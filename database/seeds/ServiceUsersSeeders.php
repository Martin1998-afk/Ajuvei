<?php
use App\User;
use App\Service;
use App\ServiceUser;
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
        $prestamistas = User::all();
        $services = Service::all();
        $faker = Faker::create();
        $prestamistas = sizeof($prestamistas);
        $services = sizeof($services);
        $r = random_int(1,20);
        for ($i=0; $i < $r; $i++) { 
            $relation = new ServiceUser();
            $relation->service_id = $faker->numberBetween(1,$services);
            $relation->prestamista_id = $faker->numberBetween(1,$prestamistas);
            $relation->active = true;
            $relation->save();
        }
    }
}
