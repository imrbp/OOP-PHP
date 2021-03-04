<?php

class ContohStatic {
    public static $angka = 1;


    public static function Hallo() {
        return "hallo " . self::$angka . " kali";
    }

    // self == untuk mengambil property angka
}

echo ContohStatic::$angka . PHP_EOL;
echo ContohStatic::Hallo();