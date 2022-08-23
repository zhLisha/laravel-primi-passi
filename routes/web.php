<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('home');

Route::get('/classi', function() {
    $classes = [
        'name' => [
            '1D' => [
                'students' => [
                    'Arianna', 'Marco', 'Grabiele', 'Luisa', 'Cecilia', 'Giovanni', 'Erica'
                ]
            ], 
            '2D' => [
                'students' => [
                    'Lucia', 'Selena', 'Enrico', 'Patrizia', 'Enzio', 'Giovanni', 'Fabiola'
                ]
            ], 
            '3D' => [
                'students' => [
                    'Maria', 'Giacomo', 'Federico', 'Emma', 'Lucrezia', 'Penelope', 'Ettore'
                ]
            ], 
            '4D' => [
                'students' => [
                    'Carina', 'Mirco', 'Irma', 'Stella', 'Giulia', 'Miranda', 'Federica'
                ]
            ], 
        ],
    ];

    return view('classes', $classes);
})->name('classes');


Route::get('/aule', function() {

    $classroom = [
        'image' => [
            'https://www.leccenews24.it/wp-content/uploads/2017/09/29193413/aula-scuola-653x367.jpg',
            'https://www.repstatic.it/content/localirep/img/rep-palermo/2021/04/18/015804313-26d2f748-35e0-417e-a13d-fedeb52e4995.jpg?webp',
            'https://www.ilfaroonline.it/photogallery_new/images/2016/08/palestra-scolastica-74610.660x368.jpg',
            'https://www.elior.it/sites/www.elior.it/files/styles/large_image_1340/public/2020-09/mense-scolastiche_0.jpg?itok=GluOVJ91'
        ]
    ];

    return view('classroom', $classroom);
})->name('classroom');

Route::get('/concatti', function() {

    $contacts = [
        'segreteria' => [
            'telefono' => '011/4367583',
            'email' => 'segreteria@gb.it'
        ],
        'consulenze' => [
            'telefono' => '011/6333458',
            'email' => 'consulenze@gb.it'
        ]
    ];
    // dd($contacts);

    return view('contacts', $contacts);
})->name('contacts');
