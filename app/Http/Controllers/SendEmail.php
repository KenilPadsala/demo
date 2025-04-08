<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmail extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        {
            $name = "Sarkar";
            $hobbies = ["Gaming", "Cricket", "Modi Nu Bhashan", [12,3343,5345456,6576]];
            $users = [
                ["name" => "Prasang", "age" => 19 ],
                ["name" => "Kenil", "age" => 22 ],
            ];
            dd($users, $hobbies,$name );
    
        }
    }
}
