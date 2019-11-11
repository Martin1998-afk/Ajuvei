<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $user = new User();
        $user->name = "administrador";
        $user->email = "admin@une.edu.mx";
        $user->password = Hash::make('12345678');
        $user->phone = "2154156";
        $user->cellphone = "8331479835";
        $user->age = "21";
        $user->active = true;
        $user->save();

        for ($i=0; $i < 5; $i++) {
            $user = new User();
            $user->name = $faker->name;
            $user->email = $faker->unique()->email;
            $user->password = Hash::make('12345678');
            $user->phone = $faker->e164PhoneNumber;
            $user->cellphone = $faker->tollFreePhoneNumber;
            $user->age = $faker->numberBetween(18,80);
            $user->description = $faker->text($maxNbChars = 200);
            $user->address = $faker->address();
            $user->active = true;
            $user->save();
        }
    }
}
