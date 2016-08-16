<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
            
        // Call the seed classes to run the seeds
        $this->call(UsersTableSeeder::class);
        $this->call(TimeEntriesTableSeeder::class);
    }
}
