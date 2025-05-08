<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarFeatures;
use App\Models\CarImage;
use App\Models\CarType;
use App\Models\Maker;
use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Support\Facades\DB;

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

//        $maker = User::factory()
//            ->count(10)
//            ->state([
//                'name' => 'Leander'
//            ])
//            ->create();

//        User::factory()
//            ->count(10)
////            ->sequence(
////                ['name' => 'Leander'],
////                ['name' => 'Zura']
////            )
//            ->sequence(fn  (Sequence $sequence) => ['name' => 'Name ' . $sequence->index])
//            ->create();

//        Car::factory()->count(2)->trashed()->create(); // works only if there's a deleted_at column

        // Callback methods, e.g. if after creating a user, I want to associate cars to him or something
//        User::factory()
//            ->afterCreating(function (User $user) {
//                dump($user);
//            })
//            ->create();

//        Maker::factory()
//            ->count(1)
////            ->hasModels(1, function (array $attributes, Maker $maker) {
////                return [];
////            })
//            ->has(Model::factory()->count(3))
//            ->create();

//        $maker = Maker::factory()->state(['name' => 'Lalala'])->create();
//        Model::factory()
//            ->count(2)
//            ->for($maker)
////            ->forMaker(['name' => 'Lexus'])
////            ->for(Maker::factory()->state(['name' => 'Lexus']))
//            ->create();

//        User::factory()
//            ->has(Car::factory()->count(5), 'favouriteCars')
////            ->hasAttached(Car::factory()->count(5), ['col1' => 'value1'], 'favouriteCars')
//            ->create();

        // ----------------- querying database even without eloquent orm -----------------

//        $cars = DB::table('cars')->get();
//        dd($cars);

//        dd(Car::get());
//        dd(Car::first());

//        $highestPrice = Car::orderBy('price', 'desc')->value('price');
//        dd($highestPrice);

//        $prices = Car::orderBy('price', 'desc')->pluck('price');
//        $prices = Car::orderBy('price', 'desc')->pluck('price', 'id');
//        dd($prices);

//        if (Car::where('user_id', 1)->exists()); // do something
//        if (Car::where('user_id', 1)->doesntExist()); // do something

//        $cars = Car::select('vin', 'price as car_price')->get();
//        dd($cars[0]->vin, $cars[0]->car_price);

//        $query = Car::select('vin', 'price as car_price');
//        $cars = $query->addSelect('mileage')->get();
//        dd($cars);

//        $distinct = Car::select('maker_id', 'model_id')->distinct()->get();
//        dd($distinct);

//        $cars = Car::limit(10)->offset(5)->get();
//        $cars = Car::skip(5)->take(10)->get(); // same as the line above

//        $carCount = Car::where('published_at', '!=', null)->count();
//        dd($carCount);

//        $minPrice = Car::where('published_at', '!=', null)->min('price'); // can also select max() or avg()

//        $carImageCars = CarImage::selectRaw('car_id, count(*) as image_count')
//            ->groupBy('car_id')
//            ->get();
//        dump($carImageCars[0]);

//        $orderedCars = Car::orderBy('published_at', 'desc')->orderBy('price', 'asc');
//        Car::latest()->get(); // created_at desc
//        Car::oldest()->get(); // created_at asc
//        Car::latest('published_at')->get(); // published_at desc
//        Car::inRandomOrder()->get();
//        $notOrderedCars = $orderedCars->reorder()->get(); // can also pass new column to do a different ordering
//        dd($notOrderedCars);


        $cars = Car::where('published_at', '<', now())
            ->orderBy('published_at', 'desc')
            ->limit(30)
            ->get();

        return view('home.index', ['cars' => $cars]);
    }
}
