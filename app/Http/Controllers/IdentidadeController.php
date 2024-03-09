<?php

namespace App\Http\Controllers;

use App\Models\Identidade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IdentidadeController extends Controller
{
    //Fo sai dadus iha dashboard
    function dadusDatabase(): Response
    {
        $dadus = Identidade::all(); // foti dadus all
        return response()->view('admin.dashboard', ['dadus' => $dadus]);
    }


    function aumentaDadus(Request $request): RedirectResponse
    {

        $request->validate([
            'naran' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:100'],
            'sexo' => 'required',
            'hela_fatin' => 'required',
            'tinan' => 'required'
        ]);

        Identidade::create([
            'naran' => $request->naran,
            'sexo' => $request->sexo,
            'hela_fatin' => $request->hela_fatin,
            'tinan' => $request->tinan
        ]);

        return redirect()->route('dashboard')->with('susessu', 'Aumenta Dadus Susessu');
    }


    //Hetan Dadus neebe Edit iha edit form blade
    function getEditDadus($id): Response
    {
        $estudante = Identidade::find($id);

        return response()->view('admin.edit', ['dadus' => $estudante]);
    }

    //Asaun ba Edit dadus
    function editDadus(Request $request): RedirectResponse
    {
        $request->validate([
            'naran' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:100'],
            'sexo' => 'required',
            'hela_fatin' => 'required',
            'tinan' => 'required'
        ]);

        $newDataEstudante = Identidade::find($request->id);
        $newDataEstudante->fill([
            'naran' => $request->naran,
            'sexo' => $request->sexo,
            'hela_fatin' => $request->hela_fatin,
            'tinan' => $request->tinan,
        ]);

        $newDataEstudante->save();

        return redirect()->route('dashboard')->with('susessu', 'Edit Dadus Susessu');
    }


    //Asaun Apaga Dadus
    function deleteDadus($id): RedirectResponse
    {
        Identidade::destroy($id);

        return redirect()->route('dashboard');
    }
}
