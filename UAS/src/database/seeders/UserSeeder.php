<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        User::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'username' => 'admin', 'slug' => 'admin', 'password' => '$2y$10$aH03aurljWVSqMw8pgkpPeTjfSW.qF3UMaF1fMMw8Jbrh2bW4CmLi',
                'phone' => '011', 'addres' => 'Toko buku', 'status' => 'active', 'role_id' => 1
            ],
            [
                'username' => 'ujang', 'slug' => 'ujang', 'password' => '$2y$10$aH03aurljWVSqMw8pgkpPeTjfSW.qF3UMaF1fMMw8Jbrh2bW4CmLi',
                'phone' => '011', 'addres' => 'Toko buku', 'status' => 'active', 'role_id' => 2
            ],

        ];

        foreach ($data as $value) {
            User::insert(
                [
                    'username' => $value['username'],
                    'slug' => $value['slug'],
                    'password' => $value['password'],
                    'phone' => $value['phone'],
                    'addres' => $value['addres'],
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'role_id' => $value['role_id'],

                ]
            );
        }
    }
}
