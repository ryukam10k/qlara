<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
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
                'name' => '一般ユーザー',
                'is_admin' => false
            ],
            [
                'name' => 'システム管理者',
                'is_admin' => true
            ]
        ]);
    }
}
