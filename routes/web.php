<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
//    return view('welcome');

    $films = DB::connection('mysql_second')
        ->table('film')
        ->select(['film_id', 'title', 'description', 'replacement_cost'])
//        ->whereBetween('replacement_cost', ['19.99', '20.99'])
        ->whereNotBetween('replacement_cost', ['18.99', '20.99'])
        ->orderBy('title')
        ->limit(5)
        ->get();

    return $films;

});
