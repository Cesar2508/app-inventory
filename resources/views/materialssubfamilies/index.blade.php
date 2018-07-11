@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  Sub Familia de materiales
                  @can ('materialssubfamilies.create')
                    <a href="{{route('materialssubfamilies.create')}}" class="btn btn-sm btn-primary pull-right">Crear</a>
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
                      @foreach ($materialsSubFamilies as $materialSubFamily)
                        <tr>
                          <td>{{$materialSubFamily->id}}</td>
                          <td>{{$materialSubFamily->name}}</td>
                          <td>
                            @can ('materialssubfamilies.show')
                              {{-- <a href="{{ route('materialssubfamilies.show',$materialSubFamily->id)}}" class="btn btn-sm btn-secondary"> --}}
                              <a href="{{ route('materialssubfamilies.show',$materialSubFamily->id)}}" class="btn btn-sm btn-secondary">
                                Ver
                              </a>
                            @endcan
                          </td>
                          <td>
                            @can ('materialssubfamilies.edit')
                              <a href="{{ route('materialssubfamilies.edit',$materialSubFamily->id)}}" class="btn btn-sm btn-secondary disabled">
                                Editar
                              </a>
                            @endcan
                          </td>
                          <td>
                            @can ('materialssubfamilies.destroy')
                              {!! Form::open(['route' => ['materialssubfamilies.destroy',$materialSubFamily->id],
                                'method' => 'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">Eliminar</button>
                              {!!Form::close()!!}
                            @endcan
                          </td>

                        </tr>
                      @endforeach
                    </tbody>

                  </table>
                  {{ $materialsSubFamilies->render()}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
