<?php

use App\Person;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('people')->delete();
        $faker = Faker\Factory::create('ja_JP');
        for ($i = 0; $i < 100; $i++) {
            Person::create([
                'name' => $faker->name,
                'mail' => $faker->email,
                'age' => $faker->numberBetween(20, 80)
            ]);
        }
    }
}
