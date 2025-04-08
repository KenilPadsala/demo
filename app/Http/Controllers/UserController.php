<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function list()
    {
        return view("users.list");
    }

    function add()
    {
        return view("users.add");
    }

    function update()
    {

    }

    function delete()
    {

    }
}
