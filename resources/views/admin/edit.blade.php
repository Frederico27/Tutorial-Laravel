@extends('base')

@section('titulu')
    Edit Dadus
@endsection

@section('konteudu')
<div class="container" style="margin-top: 5%">
    <div class="card">
        <div class="card-header">
            Edit Dadus
        </div>
        <div class="card-body">

            <form action="" method="post">
                <div class="form-group">
                    <label for="naran">Naran</label>
                    <input type="text" class="form-control mt-2 mb-2" placeholder="Hatama Naran" value="{{ $dadus->naran }}">
                    <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="hela-fatin">Hela-Fatin</label>
                    <input type="text" class="form-control mt-2 mb-2" placeholder="Hatama Hela-Fatin" value="{{ $dadus->hela_fatin }}">
                    <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                        else.</small>
                </div>
                <button class="btn btn-primary mt-2" type="submit">Edit</button>
            </form>

        </div>
    </div>

</div>
@endsection

