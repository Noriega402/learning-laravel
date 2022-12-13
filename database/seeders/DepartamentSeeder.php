<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $d = new Departament();
        $d->departament_name = "Sistemas";
        $d->save();

        $e = new Departament();
        $e->departament_name = "RR.HH";
        $e->save();

        $f = new Departament();
        $f->departament_name = "Produccion";
        $f->save();

        $g = new Departament();
        $g->departament_name = "Ventas";
        $g->save();

        $h = new Departament();
        $h->departament_name = "Compras";
        $h->save();

        $i = new Departament();
        $i->departament_name = "Bodega";
        $i->save();

    }
}
