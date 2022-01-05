<?php

namespace App\Http\Controllers;

class CountryController extends Controller
{
    public function index()
    {
        $CountryFromDB = \DB::table('country')->select('country.*')->orderBy('Name')->paginate(18);
        return view('countrys')->with('countrys1', $CountryFromDB);   
    }

    public function codeOrder($CodPais){
        $CountryFromDB = \DB::table('country')->select('country.*')->where('Code','=',$CodPais)->paginate(18);
        return view('countrys')->with('countrys1', $CountryFromDB);   
    }

    public function ContinentSearch($continente)
    {
        $CountryFromDB = \DB::table('country')->select('country.Code')->where('Continent','=',$continente)->orderBy('Name')->get();
        //return view('countrys')->with('countrys1', $CountryFromDB); 
        $c = [];
        foreach ($CountryFromDB as $a) {
            $c[] = $a->Code;
        }
        return $c;
    }
}
