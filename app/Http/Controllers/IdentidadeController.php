<?php

namespace App\Http\Controllers;

use App\Models\Estudante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IdentidadeController extends Controller
{
    function dadusDatabase(): Response
    {
        $dadus = DB::table('identidade')->get(); // foti dadus all
        return response()->view('admin.dashboard', ['dadus' => $dadus]);
    }

    function getDadus($id): Response
    {
        $estudante = Estudante::find($id);

        return response()->view('admin.edit', ['dadus' => $estudante]);
    }
}
