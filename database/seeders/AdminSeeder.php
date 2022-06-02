<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'nama' => 'Iyo Ramadhan',
            'jeniskelamin' => 'lakilaki',
            'notelpon' => '081122334455',
            'email' => 'iyo@laravel.com',
            'password' => 'iyo12345',
        ]);
    }
}
