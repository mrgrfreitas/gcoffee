<?php


use Machine\Database\Migrations\Schema;

class CompanyTableSeeder
{
    public function run()
    {

        //reset the user table
        Schema::truncate('company');

        $data = [
            'prefix' => 'Hotel',
            'name' => 'gHms',
            'about' => '',
            'history' => '',
            'phone' => '+244 222 0000 000',
            'mobile' => '+244 900 00 00 00',
            'email' => 'help@ghms.com',
            'address' => 'No address',
            'city' => 'Benguela',
            'country' => 'Angola',
            'facebook' => 'https://facebook.com/ghms',
            'tweeter' => 'https://tweeter.com/ghms',
            'instagram' => 'https://instagram.com/ghms',
            'google' => 'https://google.com/ghms',
            'post_code' => '777-7777',
            'contact_person' => '',
            'site' => 'https://ghms.com',
            'fax' => '',
            'state' => '',
            'slogan' => '',
            'checkin_time' => '14:00',
            'checkout_time' => '12:00',
            'cancellation' => '',
            'additional_info' => ''
        ];

        Schema::insert('company', $data);

    }

}