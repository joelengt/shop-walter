<?php

    /**
     * Genera una cadena aleatoria alfanumerica (nombres de archivos validos).
     *
     * @param int $length Longitud del nombre de cadena.
     * @return string
     */
    function GenerarCadenaAleatoria($length=40) {
        $key = '';
        $keys = array_merge(range(0, 9), range('a', 'z'),range('A', 'Z'));

        for ($i = 0; $i < $length; $i++) {
            $key .= $keys[array_rand($keys)];
        }

        return $key;
    }

    /**
     * Recupera la fecha dentro o hace N numeros dias.
     *
     * @param string $numero_dias Cantidad con signo de numero de dias (+n o -n dias);
     * @param string $formato Formato de la fecha que se devolvera.
     * @return bool|string
     */
    function FechaHaceNDias($numero_dias,$formato = 'Y-m-d')
    {
        return date($formato,strtotime("$numero_dias day"));
    }

    /**
     * Calcula la edad apartir de una fecha.
     *
     * @param string $dob Fecha de nacimiento (Y-m-d).
     * @param string $tdate Fecha base para hacer el calculo de la edad (Y-m-d).
     * @return int
     */
    function CalcularEdad( $dob, $tdate = "" )
    {
        $age = 0;
        if(!empty($dob)) {
            $dob = new DateTime($dob);

            $tdate = empty($tdate) ? date('Y-m-d') : $tdate;
            $now = new DateTime($tdate);
            while ($dob->add(new DateInterval('P1Y')) < $now) {
                $age++;
            }
        }
        return $age;
    }

    /**
     * @param $numeral
     * @param string $formato
     * @return bool|string
     */
    function ConvertirNumeralFecha($numeral,$formato = 'Y-m-d H:i:s')
    {
        return date($formato, $numeral);
    }

    /**
     * Verifica si una cadena es una cadena json correcta.
     *
     * @param $string_json Cadena json a verificar.
     * @return bool
     */
    function VerificarCadenaJson($string_json)
    {
        return is_string($string_json) && is_array(json_decode($string_json, true)) ? true : false;
    }

    function FechaMayorAMenor($a,$b)
    {
        if($a['fecha-inicio']==$b['fecha-inicio'])
            return 0;

        return $a['fecha-inicio']>$b['fecha-inicio']?-1:1;
    }

    function ConvertirMayusculas($cadena)
    {
        return strtoupper($cadena);
    }

    function ConvertirMinusculas($cadena)
    {
        return strtolower($cadena);
    }

    function PrimerasEnMayusculas($cadena)
    {
        return ucwords(strtolower($cadena));
    }

    function GetFechaFormato($formato = 'Y-m-d')
    {
        return date($formato);
    }

    function GetMinutosEnUnAnio()
    {
        return 60*24*365;
    }