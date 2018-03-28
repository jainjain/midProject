<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = new car();
        $car->make = 'honda2018';
        $car->year = 2018;
        $car->model = 'Tww';

        $this->assertTrue($car->save());
    }
    public function testDeleteCar()
    {

        car::where('make','honda2018')->delete();
        $this->assertDatabaseMissing('cars', ['make','honda2018']);

    }
    public function testCarCount()
    {

        $car = car::All();
        $count = $car->count();
        $this->assertEquals(50, $count);
    }
    public function testCarYear()
    {

        $car =  car::inRandomOrder()->first();
        $year = (int)$car->year;
        $this->assertInternalType("int",$year);

    }
    public function testCarModel()
    {

        $car =  car::inRandomOrder()->first();
        $model = $car->model;
        $this->assertInternalType("string",$model);

    }
}
