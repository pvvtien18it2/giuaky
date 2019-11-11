<?php

use Illuminate\Database\Seeder;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <=50 ; $i++) {
            DB::table('categories')->insert([
                'post_id' => $i,
                'newstype_id'=> random_int(1,4)
            ]);
        }
    }
}
