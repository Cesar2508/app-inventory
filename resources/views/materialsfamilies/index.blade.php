@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Familia de materiales
                  @can ('materialsfamilies.create')
                    <a href="{{route('materialsfamilies.create')}}" class="btn btn-sm btn-primary pull-right">Crear</a>
                  @endcan
                </div>

                <div class="card-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th width="10px">ID</th>
                        <th>Nombre</th>
                        <th colspan="3">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($materialsfamilies as $materialFamily)
                        <tr>
                          <td>{{$materialFamily->id}}</td>
                          <td>{{$materialFamily->name}}</td>
                          <td>
                            @can ('materialsfamilies.show')
                              <a href="{{ route('materialsfamilies.show',$materialFamily->id)}}" class="btn btn-sm btn-secondary">
                                Ver
                              </a>
                            @endcan
                          </td>
                          <td>
                            @can ('materialsfamilies.edit')
                              <a href="{{ route('materialsfamilies.edit',$materialFamily->id)}}" class="btn btn-sm btn-secondary ">
                                Editar
                              </a>
                            @endcan
                          </td>
                          <td>
                            @can ('materialsfamilies.destroy')
                              {!! Form::open(['route' => ['materialsfamilies.destroy',$materialFamily->id],
                                'method' => 'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                              {!!Form::close()!!}
                            @endcan
                          </td>

                        </tr>
                      @endforeach
                    </tbody>

                  </table>
                  {{ $materialsfamilies->render()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
