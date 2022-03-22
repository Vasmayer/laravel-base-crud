<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = config('comics');

        foreach($movies as $movie)
        {
            /* $new_movie = new Comic();
            $new_movie->fill($movie);
            $new_movie->save(); */

            Comic::create($movie);
        }
    }
}
