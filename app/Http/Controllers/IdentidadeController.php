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

        //retorna ba admin dashborad ho dadus husi query all()
        return response()->view('admin.dashboard', ['dadus' => $dadus]);
    }

    //Aumenta Dadus Estudante
    function aumentaDadus(Request $request): RedirectResponse
    {
        //Halo Validasaun ba input sira husi user
        $request->validate([
            'naran' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:100'],
            'sexo' => 'required',
            'hela_fatin' => 'required',
            'tinan' => 'required'
        ]);

        //Insert Dadus ba Database
        Identidade::create([
            'naran' => $request->naran,
            'sexo' => $request->sexo,
            'hela_fatin' => $request->hela_fatin,
            'tinan' => $request->tinan
        ]);

        //retorna ba admin.dashboard blade ho session susessu hodi halo alerta susessu (flash message)
        return redirect()->route('dashboard')->with('susessu', 'Aumenta Dadus Susessu');
    }


    //Hetan Dadus neebe Edit iha edit form blade
    function getEditDadus($id): Response
    {
        //Hetan dadus estudante ida espesifiku ba nia ID
        $estudante = Identidade::find($id);

        //retorna ba admin.edit blade hodi hetan dadus sira hodi uza ba edit 
        return response()->view('admin.edit', ['dadus' => $estudante]);
    }

    //Asaun ba Edit dadus
    function editDadus(Request $request): RedirectResponse
    {
        //Halo Validasaun ba input sira husi user
        $request->validate([
            'naran' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'max:100'],
            'sexo' => 'required',
            'hela_fatin' => 'required',
            'tinan' => 'required'
        ]);

        //Bukad estudante ne'ebe atu edit no enxe nia parametru edit sira foti husi request input user

        $newDataEstudante = Identidade::find($request->id);
        $newDataEstudante->fill([
            'naran' => $request->naran,
            'sexo' => $request->sexo,
            'hela_fatin' => $request->hela_fatin,
            'tinan' => $request->tinan,
        ]);

        //save data edit sira
        $newDataEstudante->save();

        //retorna ba admin.dashboard blade ho session susessu hodi halo alerta susessu (flash message)
        return redirect()->route('dashboard')->with('susessu', 'Edit Dadus Susessu');
    }


    //Asaun Apaga Dadus
    function deleteDadus($id): RedirectResponse
    {
        //Query buka dadus atu apaga
        Identidade::destroy($id);

        //depois apaga retorna ba admin.dashboard
        return redirect()->route('dashboard');
    }
}
