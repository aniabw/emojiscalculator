<?php

namespace App\Calculator;

use App\Interfaces\CalculatingInterface;

class Subtraction implements CalculatingInterface
{
    protected $numbers;
    
    public function setNumbers(array $numbers) {

        $this->numbers = array_values($numbers);
    }

    public function calculate()
    {
        $result = reset($this->numbers);
        for ($i = 1; $i < count($this->numbers); $i++) {
            $result -= $this->numbers[$i];
        }
      
        return $result;
    }
}
