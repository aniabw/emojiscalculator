<?php

namespace App\Http\Controllers\Calculator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\CalculatorService;
use Illuminate\Support\Facades\App;
//use App\Calculator\Addition;


class CalculatorController extends Controller
{
    public function index() 
	{
        $operations = App::make(CalculatorService::class);
		$operations = $operations->operations();
        return view('calculator.index', compact('operations'));
	}
	
	// public function show(Post $post) 
	// {
	//     return view('posts.show', compact('post'));
	// }

}