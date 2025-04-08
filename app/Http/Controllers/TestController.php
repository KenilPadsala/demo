<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        {
            // $name = "Sarkar";
            // $hobbies = ["Gaming", "Cricket", "Modi Nu Bhashan", [12,3343,5345456,6576]];
            // $users = [
            //     ["name" => "Prasang", "age" => 19 ],
            //     ["name" => "Kenil", "age" => 22 ],
            // ];
            // dd($users, $hobbies,$name );
    
            // dd(catagory::all());
            // dd(catagory::get());
            // dd(catagory::first());
            // dd(catagory::latest());

            // // Add code (1)
            // $catagory = new catagory();
            // $catagory->name = "RangRover";
            // $catagory->image = "Show Image";
            // $catagory->save();

            // add code(2)
            // $catagory = Catagory::create(["name" => "Bugati", "image" => "Mona Lisa"]);

            // $product = Product::create(["name" => "Audi", "image" => "Apple"]);

            // update code 
            // $existingcatagory = Catagory::find(2);

            // $existingcatagory->name = "Buggati";
            // $existingcatagory->image = "ABC";
            // $existingcatagory->save();

            // Delete code 
            // $existingcatagory = Catagory::find(2);
            // $existingcatagory->delete();
            // dd($catagory);


            // get single record using where

            $user = User::where('email', 'kenilpadsala8765@gmail.com')
            // ->where('user', 'kenil')
            ->first();
            dd($user);

            //get multiple record using where

            $catagories = Catagory::whereNull('image')
            // ->where('$id', '>=', '3')
            ->get();

            // dd($catagories);

            foreach ($catagories as $catagory) {
                $catagory->image = 'ABC';
                $catagory->save();

                echo $catagory->name;
            }

        }
    }
}
