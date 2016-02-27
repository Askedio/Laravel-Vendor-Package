<?php
namespace Askedio\Laravelcp\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class LaravelcpDatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('Askedio\Laravelcp\Seeds\FoobarTableSeeder');
	}

}
