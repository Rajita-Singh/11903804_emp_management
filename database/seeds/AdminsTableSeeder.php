<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
           'created_at' => \Carbon\Carbon::now(),
           'username' => 'rajita',
            'image' => '',
            'first_name' => 'rajita',
            'last_name' => 'singh',
            'email' => 'rajitasingh180@gmail.com',
            'password' => bcrypt('admin123'),
            'status' => '1',
        ]);
    }
}
