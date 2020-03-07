<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        DB::table('users')->insert(['first_name'=>'Ashsan','last_name'=>'Jamil','email'=>'jamil@jamil.com','email_verified_at'=> NULL,'password'=>'$2y$10$0MprjuZYMkq/FqG.OUv4Juc1toAFc3j4kBBQpgf7t3KMAeHaiCfG2','role_id'=>1]);
        DB::table('roles')->insert(['name'=>'admin']);
        DB::table('roles')->insert(['name'=>'employer']);
        DB::table('roles')->insert(['name'=>'applicant']);
    }
}
