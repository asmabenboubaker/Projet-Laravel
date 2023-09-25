<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcomePage()
    {
        return view('welcome');
    }

    public function Hello5twin()
{
    $message = "Bonjour 5TWIN";
    
    return response()->json(['message' => $message]);
}

public function show()
{
    return view('welcome')->with('message', 'home page');
}
}
