@extends('base')

@section('titulu')
    Login
@endsection

@section('link-login')
<li class="nav-item"><a class="nav-link active" href="{{ route('login') }}">Login</a></li>
@endsection

@section('konteudu')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="login-form bg-light mt-4 p-4">
                <form action="{{ route('actionLogin') }}" method="POST" class="row g-3">
                    @csrf
                    <h4>Bemvindo</h4>
                    <div class="col-12">
                        <label>Username</label>
                        <input type="text" name="name" class="form-control" placeholder="Username">
                    </div>
                    <div class="col-12">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark float-end">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection