<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class users_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {

            $user = new User([
                'name' => "user_$i",
                'email' => "user_$i@gmail.com",
                'password' => "user_$i|123456789"
            ]);
            $user->save();
        }
    }
}
