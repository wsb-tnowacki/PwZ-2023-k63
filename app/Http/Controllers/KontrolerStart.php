<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontrolerStart extends Controller
{
    //
    public function lista()
    {
        return view('layout');
    }

    public function kontakt()
    {
        return view('ogolny.kontakt');
    }
    public function onas()
    {
        $zadania = [
            'Zadanie 1',
            'Zadanie 2',
            'Zadanie 3'
        ];
        //return view('ogolny.onas',['zadania' => $zadania]);
        return view('ogolny.onas')->with('zadania',$zadania);
    }
    /* public function test( string $onas,string $id)
    {
        echo "<p>ID: $id <br> Onas: $onas</p>";
        return ('OK');
    } */
}
