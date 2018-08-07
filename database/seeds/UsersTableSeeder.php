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
      if(DB::table('users')->get()->count() == 0){

          DB::table('users')->insert([

              [
                  'name' => 'Felipe Antonio Ramierez',
                  'email' => 'admin@refacsoft.mx',
                  'password' => Hash::make('123456'),
                  'remember_token' => null,
                  'created_at' => date('Y-m-d H:i:s'),
                  'updated_at' => date('Y-m-d H:i:s'),
              ],

          ]);

      } else { echo "Error :: La tabla users no está vacia."; }
    }
}
