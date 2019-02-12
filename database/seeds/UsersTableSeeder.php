<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       	//Default Admin User for Initial Login
	    $users = array(
	        [
	        'last_name'     => 'Mergal',
	        'first_name'    => 'Jo Mervic',
	        'middle_name'   => 'Espino',
	        'suffix_name'   => '',
	        'birthdate'     => '1999-07-03',
	        'gender'        => 'Y',
	        'role_id'       => '1', 
	        'is_admin'      => 'Y', 
	        'username'      => 'admin',
	        'email'         => 'admin@gmail.com',
	        'mobile_number' => '09304330376',
	        'is_active'     => 'Y',
			'password'      => Hash::make('user')
			],
	    );
	        
	    foreach ($users as $user)
	    {
	        User::create($user);
	    }  
    }
}
