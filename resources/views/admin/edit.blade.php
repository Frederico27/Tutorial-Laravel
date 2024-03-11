@extends('base')

@section('titulu')
    Edit Dadus
@endsection

@section('konteudu')
<div class="container" style="margin-top: 3%">
    <div class="card">
        <div class="card-header">
            Edit Dadus
        </div>
        <div class="card-body">

            <form action="{{ route('identidade.update', $dadus) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="naran">Naran</label>
                    <input type="hidden" name="id" value="{{ $dadus->id }}">
                    <input type="text"  name='naran' class="form-control mt-2 mb-2" placeholder="Hatama Naran" value="{{ $dadus->naran }}">
                    @error('naran')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                   
                </div>

                <div class="form-group">
                    <label for="sexo">Sexo</label>
                    <select class="form-select mt-2 mb-2" name="sexo">
                        @if ($dadus->sexo == 'Mane')
                        <option value="Mane" selected>Mane</option>
                        <option value="Feto">Feto</option>    
                        @else
                        <option value="Mane">Mane</option>
                        <option value="Feto" selected>Feto</option>
                        @endif
                    </select>
                    @error('sexo')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                
                <div class="form-group">
                    <label for="hela-fatin">Hela-Fatin</label>
                    <input type="text" name='hela_fatin' class="form-control mt-2 mb-2" placeholder="Hatama Hela-Fatin" value="{{ $dadus->hela_fatin }}">
                    @error('hela_fatin')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="hela-fatin">Tinan</label>
                    <input type="number" name='tinan' class="form-control mt-2 mb-2" placeholder="Hatama Tinan" value="{{ $dadus->tinan }}">
                    @error('tinan')
                    <small id="emailHelp" class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <button class="btn btn-primary mt-2" type="submit">Edit</button>
            </form>

        </div>
    </div>

</div>
@endsection
