<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email', 'satriotol69@gmail.com')->first();
        if (!$user) {
            User::create([
                'name' => 'Satrio Jati',
                'email' => 'satriotol69@gmail.com',
                'password' => Hash::make('pandeanlamper69b'),
            ]);
        }
    }
}
