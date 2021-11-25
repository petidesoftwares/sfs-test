<?php

class ComputerSystems{
    /**
     * Collection of computer brand and their prices
     * @var array|int[]
     */
    public static array $systemSpecs = ['apple'=>1000000,'hp'=>500000,'lenovo'=>200000,'dell'=>600000];

    public static function sumPrice(array $prices){
        return array_sum($prices);
    }

    public static function getPrice(String $name){
        return self::$systemSpecs[strtolower($name)];
    }

    public static function compare(array $prices): string
    {
        $appleLenovo = abs(self::$systemSpecs['apple']-self::$systemSpecs['lenovo']);
        $hpDel = abs(self::$systemSpecs['hp']-self::$systemSpecs['dell']);
        return $appleLenovo.', '.$hpDel;
    }

    public static function highestBrand(array $prices){
        asort($prices);
        return ucfirst(array_key_last($prices));
    }
}