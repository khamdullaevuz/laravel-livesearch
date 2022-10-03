<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $persons = Person::all();
        return view('home', compact('persons'));
    }

    public function search(Request $request){
        $search_text = $request->input('search_text');
        $persons = Person::where('name', 'like', '%'.$search_text.'%')->get();
        return view('search', compact('persons'));
    }
}
