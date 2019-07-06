<?php

namespace App\Calculator;

use App\Interfaces\CalculatingInterface;

class Addition implements CalculatingInterface
{
    protected $numbers;

    public function setNumbers(array $numbers) {

        $this->numbers = $numbers;
    }

    public function calculate()
    {
        return array_sum($this->numbers);
    }
}
