<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Uncategorized',
                'description' => 'Uncategorized posts',
                'created_at' => '2016-03-10 10:00:00',
                'updated_at' => '2016-03-10 10:00:00'
            ],
            [
                'name' => 'Personal',
                'description' => 'Personal posts',
                'created_at' => '2016-03-10 10:00:00',
                'updated_at' => '2016-03-10 10:00:00'
            ],
            [
                'name' => 'Technical',
                'description' => 'Technical posts',
                'created_at' => '2016-03-10 10:00:00',
                'updated_at' => '2016-03-10 10:00:00'
            ]
        ]);
    }
}
