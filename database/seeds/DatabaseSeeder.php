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

        factory(\App\Aspirante::class,200)
            ->create()
            ->each(function(\App\Aspirante $a){
                $a->families()->saveMany(factory(\App\Family::class,3)->create());
                $a->schools()->saveMany(factory(\App\School::class,2)->create());
            });
    }
}
