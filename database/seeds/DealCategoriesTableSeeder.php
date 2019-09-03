<?php

use Illuminate\Database\Seeder;

class DealCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dela_categories')->insert([
            [
                'name' => '写真加工',
                'basic_price' => 300,
                'sort_no' => 1,
            ]
        ]);
    }
}
