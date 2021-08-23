<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $users = [];

        for ($x = 1; $x <= 5; $x++) {
            $users[$faker->name] = "user{$x}@usernotes.test";
        }

        foreach ($users as $k => $v) {
            $user = new User;
            $user->name = $k;
            $user->email = $v;
            $user->password = bcrypt('12345678');
            $user->save();
        }
    }
}
