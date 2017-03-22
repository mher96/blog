<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date("Y-m-d H:i:s", strtotime("now"));
        $categories = [
        	[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'user_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			]
        ];
        DB::table('categories')->insert($categories);
    }
}
	