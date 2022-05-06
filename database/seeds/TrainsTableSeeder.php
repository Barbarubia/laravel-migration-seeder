<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Train;

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
            $newTrain = new Train();
            $newTrain->train_company = $faker->company();                   // string('train_company', 30);
            $newTrain->train_code = $faker->regexify('[A-Z]{2}[0-9]{4}');   // string('train_code', 6);
            $newTrain->departure_railway = $faker->city();                  // string('departure_railway', 50);
            $newTrain->destination_railway = $faker->city();                // string('destination_railway', 50);
            $newTrain->departure_time = $faker->time('H:i');                // time('departure_time');
            $newTrain->arrival_time = $faker->time('H:i');                  // time('arrival_time');
            $newTrain->n_couches = $faker->randomDigitNotNull();            // tinyInteger('n_couches')->nullable();
            $newTrain->on_time = $faker->boolean();                         // boolean('on_time');
            $newTrain->deleted = $faker->boolean();                         // boolean('deleted');
        }
    }
}
