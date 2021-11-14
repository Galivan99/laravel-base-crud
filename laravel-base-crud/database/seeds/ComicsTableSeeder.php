<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fumetti = config('fumetti');
        foreach($fumetti as $fumetto) {
            $new_fumetto = new Comic();
            $new_fumetto->title = $fumetto['title'];
            $new_fumetto->description = $fumetto['description'];
            $new_fumetto->image = $fumetto['thumb'];
            $new_fumetto->price = $fumetto['price'];
            $new_fumetto->series = $fumetto['series'];
            $new_fumetto->sale_date = $fumetto['sale_date'];
            $new_fumetto->type = $fumetto['type'];
            $new_fumetto->save();
        }
    }
}
