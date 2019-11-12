<?php

use Illuminate\Database\Seeder;

class PostSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $author_id = array(1,3,4,5,6,7,8,11,12);
        for( $i = 1 ; $i<= 50 ; $i++){
            $title = $faker->title.+$i;
            DB::table('posts')->insert([
                'title'=>$title,
                'body' =>$faker->text(),
                'author_id'=> $author_id[array_Rand($author_id, 1)],
                'publish' =>random_int(0,1),
                'newstype_id'=> random_int(1,4)
            ]);
        }
    }
}
