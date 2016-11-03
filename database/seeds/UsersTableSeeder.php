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
        factory(\CodeFin\User::class,1)
            ->states('admin')->create([
                'name' => 'Diego Jose Goulart',
                'email' => 'admin@user.com'
            ]);
    }
}