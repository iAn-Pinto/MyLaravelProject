<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    echo "<html>

    <head>
        <title>Laravel</title>
        <style>
            html,
            body {
                height: 100%;
            }
            
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-size: 20px;
                font-family: 'Lato';
            }
            
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            
            .content {
                text-align: center;
                display: inline-block;
            }
            
            .title {
                font-size: 110px;
            }
        </style>
    </head>
    
    <body>
        <div class='container'>
            <div class='content'>
                <div class='title'>Hello, Dear Reader</div>
                <div class='container'>
                    <div class='content'>How are you? I hope you would love this book!
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>";
});

Route::get( 'hello/{name}', function ($name){
    echo "Hello " . $name;
});

Route::any('any', function (){
    return "Anything is possible if you try hard!";
});

Route::when('*', 'csrf', ['post', 'put', 'patch']);
