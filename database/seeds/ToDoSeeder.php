<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ToDoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todo')->truncate();

        $faker = Faker::create();
        $todo = [];

        foreach(range(1, 5) as $index) {
            $todo[] = [
                'name' => $faker->name,
                'label' => $faker->word,
                'priority' =>$faker->numberBetween(1,3),
            ];
        }
        DB::table('todo')->insert($todo);
    }
}
