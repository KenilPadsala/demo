<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    function list()
    {
        return view("students.list");
    }

    function add()
    {
        return view("students.add");
    }

    function update()
    {

    }

    function delete()
    {

    }
}
