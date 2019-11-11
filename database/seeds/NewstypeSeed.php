<?php

use Illuminate\Database\Seeder;

class NewstypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newstypes')->insert([
            array('name'=>'Sport'),
            array('name'=>'Music'),
            array('name'=>'News'),
            array('name'=>'Heathy'),
        ]);
    }
}
