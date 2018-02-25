<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name'=>"Laravel's Blog",
        	'address'=> 'Brazil, São Paulo',
        	'contact_number'=> '65 11 123456',
        	'contact_email'=> 'marcus@tonydevelopersolutions.com'
        ]);
    }
}
