<?php

use Illuminate\Database\Seeder;
use App\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $arrTrainsCompanies = [
            'FlixTrain',
            'Ryantrain',
            'ItaTreni',
            'Trenoo',
            'EasyTrain',
            'Ciuf Ciuf Trains',
            'Train 2 Go',
            'EuroTrain',
            'Boolean 56'
        ];

        $faker = \Faker\Factory::create('it_IT');
        for ($_i = 1; $_i <= 200; $_i++) {
            $trainData = [
                'train_company'         => $arrTrainsCompanies[$faker->numberBetween(0, 8)],
                'train_code'            => $faker->regexify('[A-Z]{2}[0-9]{4}'),
                'departure_railway'     => $faker->city(),
                'destination_railway'   => $faker->city(),
                'departure_time'        => $faker->time('H:i'),
                'arrival_time'          => $faker->time('H:i'),
                'n_couches'             => $faker->numberBetween(3, 7),
                'on_time'               => $faker->boolean(),
                'deleted'               => $faker->boolean()
            ];

            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}
