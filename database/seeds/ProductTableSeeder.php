<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
        	'name'=>Str::random(10),
        	'category'=>Str::random(20),
        	// 'price'=>Int::random(30),
			]);
    }
}
