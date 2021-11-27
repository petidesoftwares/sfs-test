<?php

class ComputerSystems{
    /**
     * Collection of computer brand and their prices
     * @var array|int[]
     */
    public static array $systemSpecs = ['apple'=>1000000,'hp'=>500000,'lenovo'=>200000,'dell'=>600000];

    /**
     * Sum the prices of the computer brands given in the
     * collection above and return the total.
     * @param array $prices. Array of the prices of the compters
     * @return float|int Sum of all the prices
     */
    public static function sumPrice(array $prices){
        return array_sum($prices);
    }

    /**
     * Get the price of a particular brand of computer with the given name.
     * It takes the brand name and return the price.
     * @param String $name: Brand name
     * @return int|mixed Price of the given brand
     */
    public static function getPrice(String $name){
        return self::$systemSpecs[strtolower($name)];
    }

    /**
     * Compare the brands in pairs and return the difference i their prices
     * @param array $prices: Array of the prices
     * @return string: Difference in their prices in pairs
     */
    public static function compare(array $prices): string
    {
        $appleLenovo = abs(self::$systemSpecs['apple']-self::$systemSpecs['lenovo']);
        $hpDel = abs(self::$systemSpecs['hp']-self::$systemSpecs['dell']);
        return $appleLenovo.', '.$hpDel;
    }

    /**
     * Get the brand of computer with the highest price.
     * It takes an array or collection of prices and return the brand
     * with the highest price.
     * @param array $prices: Array of prices.
     * @return string: Name of the highest brand.
     */
    public static function highestBrand(array $prices){
        asort($prices);
        return ucfirst(array_key_last($prices));
    }
}