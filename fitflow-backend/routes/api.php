<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::post('/health', function(Request $request) {

    Log::info($request->all());
    return response()->json(['message' => 'Backend confirmado'], 200);
});