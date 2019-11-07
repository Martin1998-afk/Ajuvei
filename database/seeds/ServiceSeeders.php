<?php
use\app\Service;
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
        for($i=0; $i < 5; $i++){
            $service = new Service();
            $service->name()->$faker = $name;
            $service->description()->$faker = $text;
            $service->save();

        }
        

    }
}
