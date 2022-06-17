<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin'
        ]);
    }

  /*
    public function ron()
    {
        $seller = Role::create([
            'name' => 'seller'
        ]);
    }

    public function ran()
    {
        $buyer = Role::create([
            'name' => 'buyer'
        ]);
    }*/
}
