<?php
    //---------- FUNCIÓN PARA COMPARAR LA CALIFICACIÓN Y OBTEENR LOS PUNTOS DE CADA ALUMNO ----------//
    if(!function_exists('__getQualification')) {
        function __getQualification($alice = NULL, $bob = NULL)
        {
            if (!empty($alice) || !empty($bob)) {
                $result = [0,0];
                $countAlice = count($alice);
                $countBob = count($bob);
                if ($countAlice == $countBob) {
                    for ($i = 0; $i < count($alice); $i++) {
                        if ($alice[$i] < 100 && $bob[$i] < 100) {
                            if ($alice[$i] > $bob[$i]) {
                                $result[0]++;
                            } else {
                                $result[1]++;
                            }
                        }
                    }
                } else {
                    $result = "Los arreglos no tienen la misma cantidad";
                }
            } else {
                $result = "No existen calificaciones para comparar";
            }
            return $result;
        }
    }
    //---------- FUNCIÓN PARA CONTABILIZAR PALABRAS ----------//
    if(!function_exists('__countWords')) {
        function __countWords($cadena) {
            $palabras = explode(" ", $cadena);
            $result = [];
            foreach ($palabras as $palabra) {
                if (!empty($result[$palabra])) {
                    $result[$palabra]++;
                } else {
                    $result[$palabra] = 1;
                }
            }
            return json_encode($result, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
        }
    }