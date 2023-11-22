<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            // first array first account to be created in the table
            // TODO do not Forget to remove this upon depoyment
            array(
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'admin',
                'status'=>'active'
            ),

            // Secondary account as User
            array(
                'name'=>'User',
                'email'=>'user@gmail.com',
                'password'=>Hash::make('1111'),
                'role'=>'user',
                'status'=>'active'
            ),
            // third user for another user sample
            array(
                'name' => 'user2',
                'email' => 'username2@gmail.com',
                'role'=>'user',
                'status'=>'active'
            )
        );

        DB::table('users')->insert($data);
    }
}
