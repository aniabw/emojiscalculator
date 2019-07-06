<?php
namespace App\Http\Controllers\Calculator\Api;

use App\Http\Controllers\Controller;
use App\Services\CalculatorService;
use Illuminate\Support\Facades\App;
use App\Calculator\Addition;
use App\Http\Requests\CalculatorRequest;

class CalculatorController extends Controller
{
    public function calculate(CalculatorRequest $request, Addition $addition) 
	{
		switch ($request->input('operation')) {
			case '+':
				$addition->setNumbers($request->input('numbers'));
				$result = $addition->calculate();
				break;
			case '-':
				//@todo substraction 
				$result = ['errors'=> CalculatorService::errorMessage()];
				break;
			case '*':
				//@todo multiplication 
				$result = ['errors'=> CalculatorService::errorMessage()];
				break;
			case '/':
				//@todo division 
				$result = ['errors'=> CalculatorService::errorMessage()];
				break;
		}

		return json_encode($result);
	}
}