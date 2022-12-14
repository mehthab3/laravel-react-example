<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'role' => 'Author'
            ],
            [
                'role' => 'Editor'
            ],
            [
                'role' => ' Subscriber'
            ],
            [
                'role' => 'Administrator'
            ]
        ]);
    }
}
