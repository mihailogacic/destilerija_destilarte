<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dogadjaj;
class DogadjajSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d1=new Dogadjaj();
        $d1->naziv='Poseta';
        $d1->opis='Obilazak destilerije nedeljom u podne';
        $d1->slika='poseta.jpg';
        $d1->save();

        $d2=new Dogadjaj();
        $d2->naziv='Degustacija';
        $d2->opis='Degustacija rakije nedeljom u 14 casova';
        $d2->slika='degustacija.jpg';
        $d2->save();

        $d3=new Dogadjaj();
        $d3->naziv='Full pansion';
        $d3->opis='Obilazak destilerije nedeljom u podne pa degustacija rakije nedeljom u 14 casova';
        $d3->slika='full_pansion.jpg';
        $d3->save();
    }
}
