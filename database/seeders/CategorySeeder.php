<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('categories')->insert([
		    'name' => '太郎',
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
	    ]);

	    DB::table('categories')->insert([
		    'name' => '花子',
		    'created_at' => new DateTime(),
		    'updated_at' => new DateTime(),
	    ]);
    }
}
