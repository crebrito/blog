<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InitSeeder extends Seeder
{
	public function run()
	{

        $this->call('CountriesSeeder');
        $this->call('GroupsSeeder');

	}
}
