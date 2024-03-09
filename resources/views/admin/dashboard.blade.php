@extends('base')

@section('titulu')
    Dashboard
@endsection

@section('konteudu')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                @if (session('susessu'))
                <div class="alert alert-success mt-3" id="success-alert">
                    {{ session('susessu') }}
                </div>
                @endif
                <div class="add mt-3">
                    <a class="btn btn-primary" href="{{ route('aumentaEstudante') }}">Aumenta+</a>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        <h3 class="card-title">Tabela Estudante</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                         <div class="table-responsive">

                                <table id="example1" class="table table-bordered table-striped">

                                    <!-- Cek dadus Mamuk ou lae, sekuandu mamuk ezekuta if selae ezekuta else -->

                                    @if (empty($dadus))
                                        <h1 style="display: flex; justify-content: center; margin-top: 50px">Dadus la existe
                                        </h1>
                                    @else
                                        <!-- Header husi tabela -->
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Naran</th>
                                                <th>Sexo</th>
                                                <th>Tinan</th>
                                                <th>Hela Fatin</th>
                                                <th>Asaun</th>
                                            </tr>
                                        </thead>
                                    @endif
                                    <tbody>
                                        <!-- Looping index array ba dadus hodi fo sai dadus -->
                                        @foreach ($dadus as $pessoal)
                                            <tr>
                                                <td>{{ $pessoal->id}}</td>
                                                <td>{{ $pessoal->naran }}</td>
                                                <td>{{ $pessoal->sexo }}</td>
                                                <td>{{ $pessoal->tinan }}</td>
                                                <td>{{ $pessoal->hela_fatin }}</td>
                                                <td><a class="btn btn-warning bx bx-edit" href="{{ route('editEstudante', ['id'=>$pessoal->id]) }}"> Edit</a>  <a  class="btn btn-danger bx bx-x-circle" href="{{ route('apagaEstudante', ['id'=> $pessoal->id]) }}" onclick="return confirm_delete()">Apaga</a></td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection
