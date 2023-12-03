<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Kelas;
use App\Models\Program;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Program::create([
            'program_name' => 'GEYL'
        ]);
        Program::create([
            'program_name' => 'ET'
        ]);
        Program::create([
            'program_name' => 'EA'
        ]);
        Program::create([
            'program_name' => 'Conversations'
        ]);
        Program::create([
            'program_name' => 'TOEFL'
        ]);
        Program::create([
            'program_name' => 'In House Training'
        ]);

        Kelas::create([
            'kelas_name'=>  '1A'
            ]);
        Kelas::create([
            'kelas_name'=>  '2A'
            ]);
        Kelas::create([
            'kelas_name'=>  '3A'
            ]);
        Kelas::create([
            'kelas_name'=>  '4A'
            ]);
        Kelas::create([
            'kelas_name'=>  '5A'
            ]);
        Kelas::create([
            'kelas_name'=>  '6A'
            ]);

        Roles::create([
            'role_name'=> 'Admin'
            ]);
        Roles::create([
            'role_name'=> 'Teacher'
            ]);
        Roles::create([
            'role_name'=> 'Student'
            ]);

        User::create([
            'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin123'),
                'kelas_id' =>  '1',
                'program_id' =>  '1',
                'role_id' =>  '1',
        ]);
        User::create([
            'name' => 'Teacher',
                'email' => 'teacher@teacher.com',
                'password' => bcrypt('admin123'),
                'kelas_id' =>  '1',
                'program_id' =>  '1',
                'role_id' =>  '2',
        ]);
        User::create([
            'name' => 'Izzan',
                'email' => 'izzan.alfadhil@upi.edu',
                'password' => bcrypt('admin123'),
                'kelas_id' =>  '3',
                'program_id' =>  '5',
                'role_id' =>  '3',
        ]);
    }
}
