<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('contact', function (Request $request){
    \App\Jobs\ContactCreateJob::dispatch($request->all());
});
