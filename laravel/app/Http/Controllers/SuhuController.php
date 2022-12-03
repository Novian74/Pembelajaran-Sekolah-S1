<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuhuController extends Controller
{
    public function index()
    {
        return view('suhu');
    }

    public function panas(Request $request)
    {
        $suhu = $request->suhu;
        $sebelum = $request->sebelum;
        $setelah = $request->setelah;

        if ($sebelum == 'C') {
            if ($setelah == 'C') {
                $hasil = $suhu .'°C';
            }
            if ($setelah == 'F') {
                $hasil = (9/5) * $suhu + 32 .'°F';
            }
            if ($setelah == 'K') {
                $hasil = $suhu + 273 .'°K';
            }
            if ($setelah == 'R') {
                $hasil = (4/5) * $suhu .'°R';
            }
        }

        if ($sebelum == 'F') {
            if ($setelah == 'C') {
                $hasil = ($suhu - 32) * (5/9) .'°C';
            }
            if ($setelah == 'F') {
                $hasil = $suhu .'°F';
            }
            if ($setelah == 'K') {
                $hasil = ($suhu - 32) * (5/9) + 273.15 .'°K';
            }
            if ($setelah == 'R') {
                $hasil = (4/9) * ($suhu - 32) .'°R';
            }
        }

        if ($sebelum == 'K') {
            if ($setelah == 'C') {
                $hasil = $suhu - 273.15 .'°C';
            }
            if ($setelah == 'F') {
                $hasil = ($suhu - 273.15) * (9/5) + 32 .'°F';
            }
            if ($setelah == 'K') {
                $hasil = $suhu .'°K';
            }
            if ($setelah == 'R') {
                $hasil = ($suhu - 273.15) * (4/5) .'°R';
            }
        }

        if ($sebelum == 'R') {
            if ($setelah == 'C') {
                $hasil = (5/4) * $suhu .'°C';
            }
            if ($setelah == 'F') {
                $hasil = $suhu * (9/4) + 32 .'°F';
            }
            if ($setelah == 'K') {
                $hasil = $suhu * (5/4) + 273.15 .'°K';
            }
            if ($setelah == 'R') {
                $hasil = $suhu .'°R';
            }
        }

        echo '<h1>'.$hasil.'</h1>';
    }
}
