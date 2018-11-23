<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'cpf'        => '40093685865', 
            'name'       => 'Rodrigo', 
            'phone'      => '11948205237', 
            'birth'      => '1990-10-01', 
            'gender'     => 'M',
            'email'      => 'rodrigo.joplin1@hotmail.com',
            'password'   => env('PASSWORD_HASH') ? bcrypt('080688') : '080688',
        ]);
        // $this->call(UsersTableSeeder::class);
    }
}
