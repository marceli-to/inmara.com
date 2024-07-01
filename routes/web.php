<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::statamic('/werkarchiv/{slug}', 'project.show', [
//   'layout' => 'layout.default',
//   'title' => 'Werkarchiv',
// ]);

Route::statamic('/werkarchiv/kategorie/{category?}', 'project.archive', [
  'layout' => 'layout.default',
  'title' => 'Werkarchiv',
]);