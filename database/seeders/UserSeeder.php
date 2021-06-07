<?php

namespace Database\Seeders;

use App\models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
		User::create([
			'name' => 'pemilik',
			'email' => 'cirebon',
			'password' => bcrypt('pemilik'),
			'remember_token' => Str::random(60),
		]);
    }
}
