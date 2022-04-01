<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('survey-form', function () {
    return view('survey_form');
});
// Route::['submit-form'] = 'get_survey_form_data';
// Route::post('/submit-form', 'get_survey_form_data');
Route::post('/submit-form', [Controller::class, 'get_survey_form_data']);