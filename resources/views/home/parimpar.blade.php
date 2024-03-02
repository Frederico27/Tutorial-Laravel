
@extends('main')

@section('titulu')
    Par Impar
@endsection


@section('konteudu')
<div class="container d-flex justify-content-center" style="margin-top: 10%">
    <div class="card">
        <div class="card-header">
            Defini Numeru Par Impar
        </div>
        <div class="card-body">
            <div class="hatama d-flex justify-content-center">

                <form action="/parimpar" class="row row-cols-lg-auto g-3 align-items-center" method="post">
                    @csrf
                    <div class="col-12">
                        <label class="visually-hidden" for="inlineFormInputGroupUsername">Input Numeru</label>
                        <div class="input-group">
                            <div class="input-group-text">Input Numeru</div>
                            <input type="number" class="form-control" name="numeru" placeholder="123"/>
                        </div>
            
                    @error('numeru')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                         
                    
                    </div>
            
                    <div class="col-12">
                        <button data-mdb-ripple-init type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
                <div class="rezultadu d-flex justify-content-center mt-4">
                
                    @isset($mensajen)
                    <h1>{{ $mensajen }}</h1>
                    @endisset
                
                </div>
        </div>
    </div>

</div>
@endsection