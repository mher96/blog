<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $timestamp = date("Y-m-d H:i:s", strtotime("now"));
        $posts = [
        	[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			],
			[
				'name' => str_random(10),
    			'category_id' => rand(1,10),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,
			]
        ];
        DB::table('posts')->insert($posts);
    }
}
