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
        $faker = \Faker\Factory::create('it_IT');
        for ($_i = 1; $_i <= 200; $_i++) {
            $trainData = [
                'train_company'         => $faker->word(),
                'train_code'            => $faker->regexify('[A-Z]{2}[0-9]{4}'),
                'departure_railway'     => $faker->city(),
                'destination_railway'   => $faker->city(),
                'departure_time'        => $faker->time('H:i'),
                'arrival_time'          => $faker->time('H:i'),
                'n_couches'             => $faker->randomDigitNotNull(),
                'on_time'               => $faker->boolean(),
                'deleted'               => $faker->boolean()
            ];

            $train = new Train();
            $train->fill($trainData);
            $train->save();
        }
    }
}
