<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $id = User::insertGetId([
            'name' => 'Rangga',
            'email' => 'ranggaadipratama96@yahoo.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
