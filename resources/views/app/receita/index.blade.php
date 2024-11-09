@extends('app.layout.basico')
@section('title', 'Receitas')

@section('conteudo')
    <div class="w-100 d-flex flex-column justify-content-center align-items-center gap-4">
        <h1 class="display-6 mt-2">Receitas</h1>
        <div class="w-100">
            <table class="table table-striped table-hover table-responsive table-responsive-sm">
                <thead>
                  <tr>
                    <th scope="col">Receita</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($receitas as $receita)
                      <tr>
                        <td scope="row">{{$receita->receita}}</td>
                        <td>{{$receita->tipoReceitas->tipo_receita}}</td>
                        <td>{{number_format($receita->valor_receita, 2, ',', '.')}}</td>
                        <td>{{ $receita->created_at->format('d/m/Y H:i') }}</td>
                        <td>
                          <div class="dropdown">
                              <a href="#" class="text-decoration-none text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="bi bi-gear-fill"></i>
                              </a>
                              <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{route('receita.show', $receita->id)}}">Visualizar</a></li>
                                  <li><a class="dropdown-item" href="{{route('receita.update', $receita->id)}}">Editar</a></li>
                                  <li><a class="dropdown-item" href="#">Excluir</a></li>
                              </ul>
                          </div>
                        </td>
                      
                      
                      
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="">
             {{$receitas->appends($request)->links()}}
             
           </div>
    </div>
@endsection