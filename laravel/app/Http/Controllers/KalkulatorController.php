<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    public function index()
    {
        return view('formkl');
    }

    public function kkl(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;

        if (isset($_POST['tambah'])) {
            $hasil = $angka1 + $angka2;
            return $hasil;
        }

        if (isset($_POST['kurang'])) {
            $hasil = $angka1 - $angka2;
            return $hasil;
        }

        if (isset($_POST['kali'])) {
            $hasil = $angka1 * $angka2;
            return $hasil;
        }

        if (isset($_POST['bagi'])) {
            $hasil = $angka1 / $angka2;
            return $hasil;
        }
    }
}
