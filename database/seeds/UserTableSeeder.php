<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\User::class, 50)->create();
        $role_user=Role::where('name','user')->first();
        $role_admin=Role::where('name','admin')->first();
        
        $user = new User();

        $user->name="juan";
        $user->email="juan@gmail.com";
        $user->rol="user";        
        $user->password=bcrypt('123');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name="admin";
        $user->email="admin@gmail.com";  
        $user->rol="admin";       
        $user->password=bcrypt('123');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
