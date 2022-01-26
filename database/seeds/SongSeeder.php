<?php

use Illuminate\Database\Seeder;
use App\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Song::class, 100)->create();
    }
}
