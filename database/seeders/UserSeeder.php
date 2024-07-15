<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user= new User();
        $user->name = 'Md Shovo';
        $user->email = 'shovom677@gmail.com';
        $user->password = Hash::make('22222222');
        $user->save();
        $user->assignRole('writter');

        $user= new User();
        $user->name = 'Md Arif';
        $user->email = 'mdjobairhossian677@gmail.com';
        $user->password = Hash::make('12345678');
        $user->save();
       
        $user->assignRole('admin');
        User::factory(10)->create();
    }
}
