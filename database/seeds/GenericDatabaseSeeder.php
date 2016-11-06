<?php

namespace Askedio\LaravelVendorPackage\Seeds;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class GenericDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call('Askedio\LaravelVendorPackage\Seeds\FoobarTableSeeder');
    }
}
