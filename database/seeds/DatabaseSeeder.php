<?php

//use DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();

		$this->call(prospectScoreSeeder::class);
		$this->call(prospectSeeder::class);
		$this->call(prospectUserSeeder::class);
		$this->call(shortUrlSeeder::class);
    }
}
