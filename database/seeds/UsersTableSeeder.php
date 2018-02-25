<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
        	'name' => 'annette haven',
        	'email'=> 'annette@haven.com',
        	'password'=> bcrypt('123456'),
            'admin'=>1
        ]);

        App\Profile::create([
            'user_id'=>$user->id,
            'avatar'=>'uploads/avatars/1.png',
            'about'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente numquam, tempora ducimus repudiandae! Illo molestias nulla, alias ullam. Deleniti magni, beatae at sequi recusandae cum odio odit molestias veniam corporis?',
            'facebook'=>'facebook.com',
            'youtube'=> 'youtube.com'
        ]);
    }
}
