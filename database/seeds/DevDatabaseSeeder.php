<?php

use Illuminate\Database\Seeder;

class DevDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with development data.
     *
     * @return void
     */
    public function run()
    {
        // Dev seeders to run
        $this->call(DevPostSeeder::class);
    }
}
