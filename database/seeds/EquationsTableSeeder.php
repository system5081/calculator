<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param=[
            "user_id"=>1,
            "equation"=>"1+1",
            
            ];
        DB::table("equations")->insert($param);
    }
}
