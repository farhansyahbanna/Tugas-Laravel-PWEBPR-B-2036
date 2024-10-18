<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

Route::get('/', function () {
    return view('welcome');
})->name('home');


Route::get("/login", function () {
    return view("login",);
})->name('login');

Route::post('/login', function (Request $request) {
    // Logika login dapat ditambahkan di sini (validasi atau otentikasi pengguna)

    // Untuk saat ini, langsung redirect ke halaman contact
    return redirect()->route('contact');
})->name('login.submit');

Route::post('/register', function (Request $request) {
    // Logika login dapat ditambahkan di sini (validasi atau otentikasi pengguna)

    // Untuk saat ini, langsung redirect ke halaman contact
    return redirect()->route('login');
})->name('register.submit');

// Route::get("/home", function () {
//     $contacts = [];
//     $faker = Faker::create();
//     for ($i = 1; $i <= 10; $i++) {
//         $contacts[] = [
//             'name' => $faker->name,
//             'email' => $faker->unique()->safeEmail,
//             'phone' => $faker->phoneNumber
//         ];
//     };
//     return view("homepage", ['contacts' => $contacts]);
// });

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/register', function () {
    return view('register');
})->name('register');


