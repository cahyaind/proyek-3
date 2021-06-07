<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class pemilik extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pemilik::truncate();
		Pemilik::create([
			'nama' => 'pemilik',
			'alamat' => 'cirebon',
			'notelp' => '081803909176',
			'password' => bcrypt('pemilik'),
			'remember_token' => Str::random(60),
		]);
    }
}
