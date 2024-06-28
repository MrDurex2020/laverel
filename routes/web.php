<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanetController;

// Route voor het tonen van alle planeten
Route::get('/planets', [PlanetController::class, 'index']);

// Route voor het tonen van een specifieke planeet
Route::get('/planets/{planet}', [PlanetController::class, 'show']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/planeten', function () {
    $planeten = ["Uranus", "Jupiter", "Mars", "Aarde", "Saturnus", "Pluto", "Neptunus", "Venus"];
    return view('planeten', ['planeten' => $planeten]);
}); 

$planets = [
    [
        'name' => 'Mars',
        'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
    ],
    [
        'name' => 'Venus',
        'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
    ],
    [
        'name' => 'Earth',
        'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
    ],
    [
        'name' => 'Jupiter',
        'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
    ],
];

Route::get('/planets/{planet?}', function ($selectedPlanet = null) use ($planets) {
    // Als er een planeet is geselecteerd, filter de array van planeten
    if ($selectedPlanet) {
        $filteredPlanets = collect($planets)->where('name', ucfirst($selectedPlanet))->all();
    } else {
        // Geen planeet geselecteerd, geef alle planeten terug
        $filteredPlanets = $planets;
    }

    return view('planets', ['planets' => $filteredPlanets]);
});
Route::get('/', function () {
    return view('show');
});



