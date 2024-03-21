<?php

namespace App\Http\Controllers;

use App\Models\Identidade;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class IdentidadeController extends Controller
{
    //Fo sai dadus iha identidade.index
    function index(): Response
    {
        $dadus = Identidade::orderBy('naran')->paginate(perPage: 5); // foti dadus all

        //retorna ba admin dashborad ho dadus husi query all()
        return response()->view('admin.dashboard', ['dadus' => $dadus]);
    }

    function create(): Response
    {
        return response()->view('admin.add');
    }

    //Aumenta Dadus Estudante
    function store(Request $request): RedirectResponse
    {
        //Halo Validasaun ba input sira husi user
        $request->validate([
            'naran' => ['required', 'regex:/^[a-zA-Z., ]+$/', 'max:100'],
            'sexo' => 'required',
            'hela_fatin' => 'required',
            'tinan' => 'required'
        ]);

        //Insert Dadus ba Database
        Identidade::create([
            'naran' => ucwords($request->naran),
            'sexo' => $request->sexo,
            'hela_fatin' => ucwords($request->hela_fatin),
            'tinan' => $request->tinan
        ]);

        //retorna ba admin.identidade.index blade ho session susessu hodi halo alerta susessu (flash message)
        return redirect()->route('identidade.index')->with('susessu', 'Aumenta Dadus Susessu');
    }


    //Hetan Dadus neebe Edit iha edit form blade
    function show(Identidade $identidade): Response
    {
        //retorna ba admin.edit blade hodi hetan dadus sira hodi uza ba edit 
        return response()->view('admin.edit', ['dadus' => $identidade]);
    }


    //Asaun ba Edit dadus
    function update(Identidade $identidade, Request $request): RedirectResponse
    {
        //Halo Validasaun ba input sira husi user
        $request->validate([
            'naran' => ['required', 'regex:/^[a-zA-Z., ]+$/', 'max:100'],
            'sexo' => 'required',
            'hela_fatin' => 'required',
            'tinan' => 'required'
        ]);

        //Bukad estudante ne'ebe atu edit no enxe nia parametru edit sira foti husi request input user

        $identidade->fill([
            'naran' => ucwords($request->naran),
            'sexo' => $request->sexo,
            'hela_fatin' => ucwords($request->hela_fatin),
            'tinan' => $request->tinan,
        ]);

        //save data edit sira
        $identidade->save();

        //retorna ba admin.identidade.index blade ho session susessu hodi halo alerta susessu (flash message)
        return redirect()->route('identidade.index')->with('susessu', 'Edit Dadus Susessu');
    }


    //Asaun Apaga Dadus
    function destroy(Identidade $identidade): RedirectResponse
    {
        $identidade->delete();
        //depois apaga retorna ba admin.identidade.index
        return redirect()->route('identidade.index');
    }
}
