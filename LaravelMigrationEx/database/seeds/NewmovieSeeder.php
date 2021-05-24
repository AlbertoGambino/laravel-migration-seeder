<?php

use Illuminate\Database\Seeder;

use App\Newmovie;

class NewmovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Newmovie::class, 10)-> create();
    }
}
