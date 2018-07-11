@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Sub Familia de Materiales</div>
                  <div class="card-body">
                    <p><strong>Familia de Materiales</strong> TBD </p>
                    <p><strong>Nombre</strong> {{$materialSubFamily->name}}</p>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection
