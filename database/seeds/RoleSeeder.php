<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            ['name' => 'admin'],
            ['name' => 'member']
        ];

        foreach($role as $r)
        {
            Role::create([
                'name' => $r['name']
            ]);
        }
    }
}
