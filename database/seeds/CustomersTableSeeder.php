<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => '対象外',
                'short_name' => '対象外',
                'has_tax_with_holding' => false,
            ]
        ]);
    }
}
