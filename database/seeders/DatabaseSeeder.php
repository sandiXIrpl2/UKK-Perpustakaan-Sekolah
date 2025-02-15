<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Menambahkan pengguna menggunakan factory
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Menambahkan pengguna lain dengan firstOrCreate untuk menghindari duplikasi
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'type' => 1,
                'password' => bcrypt('12345678'),
            ],
            [
                'name' => 'Manager User',
                'email' => 'manager@itsolutionstuff.com',
                'type' => 2,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@itsolutionstuff.com',
                'type' => 0,
                'password' => bcrypt('123456'),
            ],
        ];

        // Menggunakan firstOrCreate untuk mencegah duplikasi
        foreach ($users as $user) {
            User::firstOrCreate(
                ['email' => $user['email']], // Cek berdasarkan email
                [
                    'name' => $user['name'],
                    'type' => $user['type'],
                    'password' => $user['password'],
                ]
            );
        }
    }
}
