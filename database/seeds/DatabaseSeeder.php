<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeed::class);
        $this->call(NewstypeSeed::class);
        $this->call(UserSeed::class);
        $this->call(PostSeed::class);
    }
}
