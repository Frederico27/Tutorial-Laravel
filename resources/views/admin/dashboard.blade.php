@extends('base')

@section('titulu')
    Dashboard
@endsection

@section('konteudu')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5 mx-5">
                    <div class="card-header">
                        <h3 class="card-title">Tabela Estudante</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">

                            <!-- Cek dadus Mamuk ou lae, sekuandu mamuk ezekuta if selae ezekuta else -->

                            @if (empty($dadus))
                                <h1 style="display: flex; justify-content: center; margin-top: 50px">Dadus la existe
                                </h1>
                            @else
                                <!-- Header husi tabela -->
                                <thead>
                                    <tr>
                                        <th>Numeru</th>
                                        <th>Naran</th>
                                        <th>Sexo</th>
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
                                        <td>{{ $pessoal->hela_fatin }}</td>
                                        <td><a href="/edit">Edit</a> | <a href="#">Apaga</a></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
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