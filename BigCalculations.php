<?php
/**
 * Created by PhpStorm.
 * User: Ruslan
 * Date: 23.03.2019
 * Time: 15:56
 */


class BigCalculations
{
    public $iterations;

    public function __construct($iterations)
    {
        $this->iterations = $iterations;
    }

    public function calculate() {
        for ($i = 1; $i <= $this->iterations; $i++) {
            $tmp = pow(rand($i, $this->iterations) / 1627.2873 * 2343.7736, 0.21);
        }
    }

}