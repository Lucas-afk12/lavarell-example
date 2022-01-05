<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class paisesController extends Controller

{
    public function index($continent)
    {
        if ($continent) {
            $citysFromDB = \DB::table('city')
                ->select('city.*')
                ->orderBy('city.Name')
                ->paginate(18);
            return view('citys')->with('ciudades', $citysFromDB);
        }
        $citysFromDB = \DB::table('city')
            ->select('city.*')
            ->orderBy('city.Name')
            ->paginate(18);
        return view('citys')->with('ciudades', $citysFromDB);
    }

    public function CodeOrder($CodPais)
    {
        $citysFromDB = \DB::table('city')
            ->select('city.*')
            ->where('CountryCode', '=', $CodPais)
            ->orderBy('city.Name')
            ->paginate(18);
        return view('citys')->with('ciudades', $citysFromDB);
    }
}
