<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        // insert 3 users
        DB::table('users')->insert([
            
                'name'=>'Juan Delacruz',
                'email'=>'juan@gmail.com',
                'email_verified_at'=>now(),
                'password'=> bcrypt('12345'),
                'remember_token'=> Str::random(10),
                'created_at'=> now(),
                'updated_at'=> now(),
            ]);
    }
}
