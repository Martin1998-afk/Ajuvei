<?php
use Faker\Factory as Faker;
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
    }
}
