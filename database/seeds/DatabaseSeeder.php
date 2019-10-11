<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
       Factory(App\User::class,5)->create()->each(function($user){
            $user->$question()->saveMany(factory(App\Question::class, rand(1,5)))->each(function ($q){
                $q->answer()->save(factory(App\Answer::class));
            })->make();
        });
    }
}
