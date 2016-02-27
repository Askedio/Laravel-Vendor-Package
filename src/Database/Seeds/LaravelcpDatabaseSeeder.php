<?php

namespace Askedio\Laravelcp\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

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
