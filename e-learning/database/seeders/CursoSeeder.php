<?php

namespace Database\Seeders;

use App\Models\Curso;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $curso = new Curso();

        $curso -> name = "Laravel";
        $curso -> description = "El mejor framework de PHP";
        $curso -> categoria = "Desarrollo Web";

        $curso -> save();

        $curso2 = new Curso();

        $curso2 -> name = "Vue";
        $curso2 -> description = "Framework de JS";
        $curso2 -> categoria = "Desarrollo Web";

        $curso2 -> save();
    }
}
