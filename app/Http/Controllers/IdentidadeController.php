<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IdentidadeController extends Controller
{
    function dadusDatabase(): Response
    {
        $dadus = DB::table('identidade')->get(); // foti dadus all
        // DB::table('identidade')->select('naran', 'tinan')->where('tinan', '>', 22);
        // DB::raw("SELECT naran, tinan From identidade where tinan > 22");
        // // dd($dadus);

        // Identidade::all();
        // Identidade::first();
        // Identidade::last();
        // Identidade::find(5);
        // Identidade::select('naran', 'tinan')

        return response()->view('admin.dashboard', ['dadus' => $dadus]);
    }
}
