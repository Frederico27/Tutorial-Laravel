<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ParImpar extends Controller
{
    public function check(Request $request): Response
    {
        $request->validate([
            'numeru' => 'required'
        ]);

        $numeru = $request->input('numeru');

        $rezultadu = $numeru % 2 == 0 ? 'Numeru Par' : 'Numeru Impar';

        return response()->view('home.parimpar', ['mensajen' => $rezultadu]);

        // if ($numeru % 2 == 0) {
        //     return response()->view('home.parimpar', ['mensajen' => 'Numeru Par']);
        // } else {
        //     return response()->view('home.parimpar', ['mensajen' => 'Numeru Impar']);
        // }
    }
}
