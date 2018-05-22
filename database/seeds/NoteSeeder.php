<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notes')->truncate();

        $faker = Faker::create();
        $notes = [];

        foreach(range(1, 20) as $index) {
            $notes[] = [
                'title' => $faker->name,
                'color' => $faker->colorName,
                'description' =>$faker->text,
                'post' => $faker->text,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ];
        }
        DB::table('notes')->insert($notes);
    }
}
