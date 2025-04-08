<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $name = "kenil padsala";
        $email = "kenilpadsala@gmail.com";

        $hobbies = ["Gaming", "Travelling", "Movies"];

        $aadhaarcard = ("3687 0904 0347");

        $pancard = ("GADPP7802Q");

        $electioncard = ("SRV2721074");

        $mobilenumber = ("6353900232");


        $age = 40;

        $data = [
            'name' => $name,
            'email' => $email,
            'hobbies' => $hobbies,
            'aadhaarcard' => $aadhaarcard,
            'pancard' => $pancard,
            'electioncard' => $electioncard,
            'mobilenumber' => $mobilenumber,
            'age' => $age
        ];

    
        return view('welcome', $data);
    }
}
