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
//        $this->call(UserFactory::class);
//        $this->call(UserSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
