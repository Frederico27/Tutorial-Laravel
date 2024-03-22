<div>
    {{-- The whole world belongs to you. --}}
    <div class="col-12">
        @if (session('susessu'))
        <div class="alert alert-success mt-3" id="success-alert">
            {{ session('susessu') }}
        </div>
        @endif
  
        <div class="container">
            <div class="row">
              <div class="col">
               <a class="btn btn-primary mt-3" href="{{ route('identidade.create') }}">Aumenta (+)</a>
              </div>
              <div class="col-md-4 mt-4">
                <input type="text" class="form-control" placeholder="search" wire:model.live='searchValue'>
              </div>
            </div>
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
                               @forelse ($dadus as $pessoal)
                                   <tr>
                                       <td>{{ $pessoal->id}}</td>
                                       <td>{{ $pessoal->naran }}</td>
                                       <td>{{ $pessoal->sexo }}</td>
                                       <td>{{ $pessoal->tinan }}</td>
                                       <td>{{ $pessoal->hela_fatin }}</td>
                                       <td><a class="btn btn-warning bx bx-edit" href="{{ route('identidade.show', $pessoal) }}"> Edit</a>
                                       <form action="{{ route('identidade.destroy', $pessoal) }}" method="POST" style="display: inline-block;">
                                           @csrf
                                           @method('DELETE')
                                           <button type="submit" class="btn btn-danger bx bx-x-circle" onclick="return confirm_delete()">Apaga</button></td>    
                                       </form> 
                                   </tr>
                                @empty
                                <h3 class="text-center">Dadus la Existe</h3>
                               @endforelse
        
                           </tbody>
                       </table>
                   </div>
                   {{ $dadus->links() }}
           </div>
           <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
