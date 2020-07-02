<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Country;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function continent($name)
    {
        $continent = Continent::where('name',$name)->first();

        return view('continent',compact('continent'));
    }

    public function country($name)
    {
        $country = Country::where('name',$name)->first();

        return view('country',compact('country'));
    }

    public function city($name)
    {
        $city = Country::where('name',$name)->first();

        return view('city',compact('city'));
    }
}
