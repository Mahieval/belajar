<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
 
    	for($i = 1; $i <= 50; $i++){
 
    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('employees')->insert([
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'departement_id' => $faker->numberBetween(1,5),
            ]);
        }    
    }
}
