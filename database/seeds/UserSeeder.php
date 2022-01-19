<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use \Illuminate\Database\Eloquent\Factory;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();
//        $faker=Faker::create();
//        for($i=0; $i<=4000; $i++){
//            DB::table('users')->insert([
//                'sponser_id' => 'FT000'.Str::random(3),
//                'first_name' => Str::random(10),
//                'last_name' => Str::random(10),
//                'phone_number' => Str::random(10),
//                'active' => 1,
//                'parent_id' => range(1,100),
//                'email' => Str::random(4).'@gmail.com',
//                'email_verified_at' => now(),
//                'password' => Hash::make('12345678'),
//                ]);
//        }

    }
}
