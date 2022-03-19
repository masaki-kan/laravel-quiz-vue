<?php

namespace Database\Seeders;

use Illuminate\Database\Seeders;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(
            [
                InformationTableSeeder::class,
                CategoryTableSeeder::class,
                AnswerTableSeeder::class,
                QuizTableSeeder::class
            ]
        );
    }
}
