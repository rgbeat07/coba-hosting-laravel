<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/project', function () {
    $projectItem = [
        'Calculator', 'Accounting', 'Student Report', 'POS Resto', 'Online Store', 'Pet Shop'
    ];

    return view('project', ['data'=> $projectItem]);
});

route::get('/checker', function(){
    return view('checkerboard');
});