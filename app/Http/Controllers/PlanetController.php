<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanetController extends Controller
{
    // Array met planeten als private property
    private $planets = [
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

    /**
     * Toon alle planeten.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('planets.index', ['planets' => $this->planets]);
    }

    /**
     * Toon details van een specifieke planeet.
     *
     * @param  string  $planetName
     * @return \Illuminate\View\View
     */
    public function show($planetName)
    {
        // Zoek de planeet in de array op basis van de naam
        $planet = collect($this->planets)->firstWhere('name', ucfirst($planetName));

        if (!$planet) {
            abort(404, 'Planeet niet gevonden.');
        }

        return view('planets.show', ['planet' => $planet]);
    }
}
