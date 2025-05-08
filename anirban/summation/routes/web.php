<?php

use Illuminate\Support\Facades\Route;

Route::get('summation', function () {
    return view('summation::form');
});

Route::post('summation', function (\Illuminate\Http\Request $request) {
    $sum = $request->input('number1') + $request->input('number2');
    return view('summation::form', ['sum' => $sum]);
});
