<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 50; $i++) { 
    		# code...
    	
        DB::table('admin')->insert([
            'uname' => str_random(10),
            'password' => Hash::make('12345678'),
            'tel' => '13'.rand(111111111,999999999),
            'cdate'=>date('Y-m-d H:i:s',time())
        ]);

        }
    }

}
