<?php
    namespace App\Controllers;
    class Home extends BaseController
    {
        public function index()
        {
            $alice = [17, 28, 30];
            $bob = [99, 16, 8];
            $query_home['prueba1'] = __getQualification($alice, $bob);
            $word = "Érase una vez una niñita que lucía una hermosa capa de color rojo. Como la niña la usaba muy a menudo, todos la llamaban Caperucita Roja. Un día, la mamá de Caperucita Roja la llamó y le dijo: —Abuelita no se siente muy bien, he horneado unas galletitas y quiero que tú se las lleves. —Claro que sí —respondió Caperucita Roja, poniéndose su capa y llenando su canasta de galletas recién horneadas. Antes de salir, su mamá le dijo: — Escúchame muy bien, quédate en el camino y nunca hables con extraños. —Yo sé mamá —respondió Caperucita Roja y salió inmediatamente hacia la casa de la abuelita";
            $query_home['prueba2'] = __countWords($word);
            return view('header')
                .view('home', $query_home)
                .view('footer');
        }
    }
