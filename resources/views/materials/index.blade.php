@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Materiales
                  @can ('materials.create')
                    <a href="{{route('materials.create')}}" class="btn btn-sm btn-primary pull-right">Crear</a>
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
                      @foreach ($materials as $material)
                        <tr>
                          <td>{{$material->id}}</td>
                          <td>{{$material->name}}</td>
                          <td>
                            @can ('materials.show')
                              {{-- <a href="{{ route('materials.show',$material->id)}}" class="btn btn-sm btn-secondary"> --}}
                              <a href="{{ route('materials.show',$material->id)}}" class="btn btn-sm btn-secondary">
                                Ver
                              </a>
                            @endcan
                          </td>
                          <td>
                            @can ('materials.edit')
                              <a href="{{ route('materials.edit',$material->id)}}" class="btn btn-sm btn-secondary disabled">
                                Editar
                              </a>
                            @endcan
                          </td>
                          <td>
                            @can ('materials.destroy')
                              {!! Form::open(['route' => ['materials.destroy',$material->id],
                                'method' => 'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                              {!!Form::close()!!}
                            @endcan
                          </td>

                        </tr>
                      @endforeach
                    </tbody>

                  </table>
                  {{ $materials->render()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
