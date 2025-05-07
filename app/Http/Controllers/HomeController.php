<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
//        // Select All Cars
//        $cars = Car::get();
//
//        // Select published Cars
//        $cars = Car::where('published_at', '!=', null)->get();
//
//        // Select the first car
//        $car = Car::where('published_at', '!=', null)->first();

//        $cars = Car::where('published_at', '!=', null)
//            ->where('user_id', 1)
//            ->orderBy('published_at', 'desc')
//            ->limit(2)->get();
//
//        dump($cars);

//        $car = new Car();
//        $car->maker_id = 1;
//        $car->model_id = 1;
//        $car->year = 2002;
//        $car->price = 123;
//        $car->vin = 123;
//        $car->mileage = 123;
//        $car->car_type_id = 1;
//        $car->fuel_type_id = 1;
//        $car->user_id = 1;
//        $car->city_id = 1;
//        $car->address = 'Lorem ipsum';
//        $car->phone = '123456';
//        $car->description = null;
//        $car->published_at = now();
//        $car->save();

        // ASSOCIATIVE ARRAY
//        $carData = [
//            'maker_id' => 1,
//            'model_id' => 1,
//            'year' => 2024,
//            'price' => 20000,
//            'vin' => '999',
//            'mileage' => 5000,
//            'car_type_id' => 1,
//            'fuel_type_id' => 1,
//            'user_id' => 1,
//            'city_id' => 1,
//            'address' => 'Something',
//            'phone' => '999',
//            'description' => null,
//            'published_at' => now(),
//        ];

        // Approach 1
//        $car = Car::create($carData);

        // Approach 2
//        $car2 = new Car();
//        $car2->fill($carData);
//        $car2->save();

        // Approach 3
//        $car3 = new Car($carData);
//        $car3->save();

//        $car = Car::find(1);
//        $car->price = 12000;
//        $car->save();

//        $carData = [
//            'maker_id' => 1,
//            'model_id' => 1,
//            'year' => 2024,
//            'price' => 20000,
//            'vin' => '9999',
//            'mileage' => 5000,
//            'car_type_id' => 1,
//            'fuel_type_id' => 1,
//            'user_id' => 1,
//            'city_id' => 1,
//            'address' => 'Something',
//            'phone' => '999',
//            'description' => null,
//            'published_at' => now(),
//        ];
//
//        $car = Car::updateOrCreate(
//            ['vin' => '9999', 'price' => 20000],
//            $carData
//        );
//
//        dump($car);

//        Car::where('published_at', null)
//            ->where('user_id', 1)
//            ->update(['published_at' => now(), 'price' => 3000]);

//        $car = Car::find(23);
//        $car->delete();

//        Car::destroy(21, 22);
//
//        Car::where('published_at', null)
//            ->where('user_id', 1)
//            ->delete();
//
//        Car::truncate();

//        // 5 challenges | course at about @6:40:30
//        $expensiveCars = Car::where('price', '>', 20_000)->get();
//        dump($expensiveCars);
//        $toyota = Maker::where('name', 'Toyota')->first();
//        dump($toyota);
//        FuelType::create(['name' => 'Electric']);
//        Car::find(1)->update(['price' => 15_000]);
//        Car::where('year', '<', 2020)->delete();

//        $car = Car::find(1);
//        dump($car->features, $car->primaryImage);

//        $car->features->abs = 0;
//        $car->features->save();

//        $car->features->update(['abs' => 0]);
//
//        $car->primaryImage->delete();

//        $car = Car::find(2);
//        $carFeatures = new CarFeatures([
//           'abs' => false,
//            // ...
//        ]);
//        $car->features()->save($carFeatures);

        // -------------------------- One-to-Many -----------------------------

//        $car = Car::find(1);
//
//        //        $image = new CarImage(['image_path' => 'something', 'position' => 2]);
////        $car->images()->save($image);
//
////        $car->images()->create(['image_path' => 'something 2', 'position' => 3]);
//
//        $car->images()->saveMany([
//            new CarImage(['image_path' => 'something', 'position' => 4]),
//            new CarImage(['image_path' => 'something', 'position' => 5]),
//        ]);
//
//        $car->images()->createMany([
//            ['image_path' => 'something', 'position' => 6],
//            ['image_path' => 'something', 'position' => 7]
//        ]);

        // -------------------------- Many to one ----------------------------------

//        $car = Car::Find(1);
//        dd($car->carType);

//        $carType = CarType::where('name', 'Hatchback')->first();
//        dd($carType->cars);
//
//        $cars = Car::whereBelongsTo($carType)->get();
//        dd($cars);

//        $car = Car::find(1);
//        $carType = CarType::where('name', 'Sedan')->first();
//        $car->car_type_id = $carType->id;
//        $car->save();
//
//        $car->carType()->associate($carType);
//        $car->save();

//        $car = Car::find(1);
//        dd($car->favouredUsers);

//        $user = User::find(1);
//        dd($user->favouriteCars);
//        $user->favouriteCars()->sync([3]);
//        $user->favouriteCars()->attach([1, 2]);
//        $user->favouriteCars()->syncWithPivotValues([3], ['']);
//        $user->favouriteCars()->detach([1, 2]);
//        $user->favouriteCars()->detach(); // detach everything
//        dd($user->favouriteCars);

        return view('home.index');
    }
}
