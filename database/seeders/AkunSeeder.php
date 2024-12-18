<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
    public function run(): void
    {
        $user = User::create([
            'username' => 'sAdmin',
            'password' => Hash::make('1234')
        ]);
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    public function run()
    {
        $user = User::create([
            'username' => 'SAdmin',
            'password' => Hash::make('12345')
        ]);

>>>>>>> ac37d0b2 (pertemuan-12)
>>>>>>> 59c60a5 (pertemuan-12)
>>>>>>> 5887767 (pertemuan-12)
        $user->roles()->attach(1);
    }
}
