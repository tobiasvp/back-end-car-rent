<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cars;
use App\Models\Driver;
use App\Models\Offer;
use App\Models\Schedule;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        Schedule::factory(10)->create();
        Offer::factory(10)->create();

        Driver::factory()->create([
            'driver_name' => 'Johnny',
            'description' =>  fake()->sentence(),
            'price' => rand(0, 1),
            'img' =>   'https://wallsdesk.com/wp-content/uploads/2016/11/Google-HD-Wallpaper.jpg',

        ]);


        $dataNameCar = ['Tesla', 'Rubicon'];
        $dataPictureCar = ['https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fs1.cdn.autoevolution.com%2Fimages%2Fgallery%2FTESLA-MOTORS-Model-S-4693_74.jpg&f=1&nofb=1&ipt=f0f6abdf35afc9eb5f738820bff8b79ea030e094131dcf4be6abb1d7a5266d06&ipo=images', 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fsergesautosales.files.wordpress.com%2F2016%2F12%2Frubicon-1.jpg&f=1&nofb=1&ipt=c54ad71c05b2e1c2b5ac775abd4e57906f5a481b016e77d527d04db99b9fa5c6&ipo=images'];

        for ($i = 0; $i < count($dataNameCar); $i++) {
            Cars::factory()->create(
                [
                    'name_car' => $dataNameCar[$i],
                    'img_car' => $dataPictureCar[$i],
                    'is_available' => rand(0, 1),
                    'price' =>  rand(2, 10)
                ]
            );
        }
    }
}
