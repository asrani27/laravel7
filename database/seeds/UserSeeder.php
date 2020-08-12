<?php

use App\{Role, User};
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = \App\Role::where('name', 'admin')->first();
        $member = \App\Role::where('name', 'member')->first();
        
        $usersMember = [
            ['name' => 'asrani', 'email' => 'email@asrani.com', 'password' => '12345'],
            ['name' => 'udin', 'email' => 'email@udin.com', 'password' => '12345'],
            ['name' => 'aziz', 'email' => 'email@aziz.com', 'password' => '12345'],
        ];

        foreach($usersMember as $m)
        {
            $user = User::create([
                'name' => $m['name'],
                'email' => $m['email'],
                'password' => bcrypt($m['password'])
            ]);

            if($m['name'] == 'asrani'){
                $user->roles()->attach($admin);
            }else{
                $user->roles()->attach($member);
            }

        }
    }
}
