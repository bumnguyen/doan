<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
       		['name'=>'hieu', 'hinh'=>'1.jpg','quyen'=>'ADMIN','email'=>'minhhieu@gmail.com', 'password'=>bcrypt('12345')],
       		['name'=>'thao','hinh'=>'2.jpg', 'quyen'=>'THƯỜNG','email'=>'thao@gmail.com', 'password'=>bcrypt('12345')],
       		['name'=>'thang','hinh'=>'3.jpg','quyen'=>'THƯỜNG', 'email'=>'hang@gmail.com', 'password'=>bcrypt('12345')]
       ]);
    }
}
