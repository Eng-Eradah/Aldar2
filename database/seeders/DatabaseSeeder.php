<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('roles')->insert([
            'name'       => 'admin',
            'display_name'   => 'ادمن ',
           
        ]);
        DB::table('roles')->insert([
            'name'       => 'lawyer',
            'display_name'   => 'محامي',    
            
        ]);
        DB::table('roles')->insert([
            'name'       => 'user',
            'display_name'   => 'مستخدم',
            
        ]);
        $user=  DB::table('users')->insert([ 'name' =>"admin",
        'email' => "admin@gmail.com",
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
       'phone'=>712896,
       'id_num'=>'num',
       'id_pic'=>'num',
       'id_type'=>'num',
       'pic'=>'num',
       'net_amount'=>20,
       'lock'=>1,
        ]);
        
        $user= DB::table('users')->insert([ 'name' =>"user",
        'email' => "user@gmail.com",
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'phone'=>712886,
        'id_num'=>'num',
        'id_pic'=>'num',
        'id_type'=>'num',
        'pic'=>'num',
        'net_amount'=>20,
        'lock'=>1,]);
        DB::table('role_user')->insert([
            'role_id'       => 1,
            'user_id'   => 1,
            'user_type'=>'user_type'
            
        ]);
        DB::table('role_user')->insert([
            'role_id'       => 2,
            'user_id'   => 2,
            'user_type'=>'user_type'
            
        ]);

    }
}
