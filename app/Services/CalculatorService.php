<?php

namespace App\Services;

class CalculatorService
{ 
    public function operations() 
    {    
        $operationsConfig = config('operations.emoji');
        $operations = [];
        if(isset($operationsConfig)) {
            foreach ($operationsConfig as $operationKey => $operationValue) {
                $operations[$operationKey]['operation'] = $operationValue[0];
                $operations[$operationKey]['emoji'] = $operationValue[2];
            }
        }
        return $operations;
    }

    public static function errorMessage() 
    {    
        return 'Sorry, this function will work when you purchase full access';
    }
}