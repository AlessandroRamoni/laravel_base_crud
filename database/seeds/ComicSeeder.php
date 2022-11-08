<?php

use Illuminate\Database\Seeder;

use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $comics = config('data.comics');

        foreach($comics as $model){
            $comic = new Comic();
            $comic->title = $model['title'];
            $comic->description = $model['description'];
            $comic->thumb = $model['thumb'];
            $comic->price = $model['price'];
            $comic->series = $model['series'];
            $comic->sale_date = $model['sale_date'];
            $comic->type = $model['type'];
            $comic->save();
         }
    }
}
