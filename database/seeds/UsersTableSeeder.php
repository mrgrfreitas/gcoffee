<?php


use Machine\Database\Migrations\Schema;

class UsersTableSeeder
{
    public function run()
    {

        //reset the user table
        Schema::truncate('users');

        $data = [
            'name' => 'Geraldo Freitas',
            'email' => 'geraldo@ghms.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => password_hash('gdrfgdrf-1989', PASSWORD_DEFAULT),
            'status' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ];

        Schema::insert('users', $data);

    }

}