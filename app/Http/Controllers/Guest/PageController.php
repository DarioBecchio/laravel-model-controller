<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    
    public function index()
    {
        //Per selezionare tutti i film nel Database
        //$movies = Movie::all();
        //$movies = Movie::where('title', 'Gravity')->get();
        //$movies = Movie::where('vote', '>' , 8)->get();
        //$movies = Movie::where('vote', '>' , 8)->orderBy('date' , 'desc') ->get();
        //$movies = Movie::where('vote', '>' , 8)->orderBy('date' , 'desc')->limit(2) ->get();
        
        //paginate va abbinato a links nella pagina dove stampiamo
        //$movies = Movie::where('vote', '>' , 8)->orderBy('date' , 'desc') ->paginate(4);
        
        $movie = Movie::find(7);
        dd($movie);
        return view('home', compact('movies'));
    } 
}
