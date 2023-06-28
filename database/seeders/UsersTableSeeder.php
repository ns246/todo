<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('to_do_users')->insert([
					'name' => 'test',
					'email' => 'dummy@email.com',
					'password' => bcrypt('password'),
					'created_at' => Carbon::now(),
					'updated_at' => Carbon::now(),
				]);
    }
}
