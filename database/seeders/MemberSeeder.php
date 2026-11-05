<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Member::create([
            'name' => 'Kabir',
            'designation' => 'President',
            'age' => 44,
            'email' => 'kabir44@gmail.com',
            'phone' => '01487567854',
            'address' => 'G-2/12,BRRI,Joydebpur,Gazipur',
            'occupation' => 'Scientific Assistant',
            'password' => '497573fd84efg',
        ]);

        Member::create([
            'name' => 'Rahim Ahmed',
            'age' => 25,
            'email' => 'rahim@gmail.com',
            'phone' => '01712345678',
            'address' => 'Dhaka, Bangladesh',
            'password' => 'mysecretpassword',
        ]);
    }
}
