<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
//        dd($request, request());
        $cars = User::find(1)
            ->cars()
            ->with(['primaryImage', 'maker', 'model'])
            ->orderBy('created_at', 'desc')
            ->paginate(5)
//            ->withPath('/user/cars')
//            ->appends(['sort' => 'price'])
//            ->withQueryString()
//            ->fragment('cars')
        ;
        return view('car.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Car $car)
    {
//        // If the request URL looks like this:
//        // https://grabacar.ddev.site/car/1?page=1
//        dump($request->path()); // Output: car/1
//        dump($request->url()); // Output: https://grabacar.ddev.site/car/1
//        dump($request->fullUrl()); // Output: https://grabacar.ddev.site/car/1?page=1
//        dump($request->method()); // Output: GET
//        if($request->isMethod('post')) {
//            // If the request method is POST
//        }
//        if($request->isXmlHttpRequest()) {
//            // If the rest is an AJAX request
//        }
//        if($request->is('admin/*')) {
//            // If the request URL matches the pattern admin/*
//        }
//        if($request->routeIs('admin.*')) {
//            // If the route name matches the pattern admin.*
//        }
//        if($request->expectsJson()) {
//            // If the request expects JSON response
//        }
//        dump($request->host()); // Output: grabacar.ddev.site
//        dump($request->httpHost()); // Output: grabacar.ddev.site (or e.g. localhost:8000, port may be here)
//        dump($request->schemeAndHttpHost()); // Output: https://grabacar.ddev.site:80
//        dump($request->header('Content-Type')); // Output: null
//        dump($request->bearerToken()); // Output: null <======= USEFUL FOR REST APIS !!!!!!!!!!!!!
//        dump($request->ip()); // Output: 127.0.0.1
        return view('car.show', ['car' => $car]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('car.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Car $car)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
    }

    public function search()
    {
        $query = Car::select('cars.*')->where('published_at', '<', now())
            ->with(['primaryImage', 'maker', 'model', 'carType', 'fuelType'])
            ->orderBy('published_at', 'desc');

        // how to do JOINs
//        $query->rightJoin('cities', 'cities.id', '=', 'cars.city_id')
//            ->join('car_types', 'car_types.id', '=', 'cars.car_type_id')
//            ->where('cities.state_id', 2)
//        ->where('car_types.name', 'Sedan');

        // how to include the joined city name in the result
//        $query->select('cars.*', 'cities.name as city_name');

//        $carCount = $query->count();
//
//        $cars = $query->limit(30)->get();

        $cars = $query->paginate(15);

        return view('car.search', ['cars' => $cars]);
    }

    public function watchlist()
    {
        $cars = User::find(4)
            ->favouriteCars()
            ->with(['primaryImage', 'city', 'maker', 'model', 'carType', 'fuelType'])
            ->paginate(15);
        return view('car.watchlist', ['cars' => $cars]);
    }
}
