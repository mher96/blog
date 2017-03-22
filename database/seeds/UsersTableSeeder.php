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

    	$timestamp = date("Y-m-d H:i:s", strtotime("now"));
    	$users = [
    		[

    			'name' => str_random(10),
    			'email' => str_random(10).'email',
    			'password' => bcrypt('secret'),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,

    		],[

    			'name' => str_random(10),
    			'email' => str_random(10).'email',
    			'password' => bcrypt('secret'),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,

    		],[

    			'name' => str_random(10),
    			'email' => str_random(10).'email',
    			'password' => bcrypt('secret'),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,

    		],[

    			'name' => str_random(10),
    			'email' => str_random(10).'email',
    			'password' => bcrypt('secret'),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,

    		],[

    			'name' => str_random(10),
    			'email' => str_random(10).'email',
    			'password' => bcrypt('secret'),
    			'created_at' => $timestamp,
    			'updated_at' => $timestamp,

    		]
    	];
    	DB::table('users')->insert($users);
    }
}
