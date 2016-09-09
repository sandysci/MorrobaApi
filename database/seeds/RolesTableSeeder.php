<?php

use Illuminate\Database\Seeder;
use App\Role;


class RolesTableSeeder extends Seeder{

	public function run(){
		///1==Admin
			Role::create([
				'id'=>1,
				'role_name'=>'Admin'
				]);
			//2=driver
			Role::create([
				'id'=>2,
				'role_name'=>'Driver'
				]);
			//3=passenger/
			Role::create([
				'id'=>3,
				'role_name'=>'Passenger'
				]);
			# code...
		


	}
}