@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Familia de Materiales</div>
                <div class="card-body">
                  <p><strong>Nombre</strong> {{$materialFamily->name}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
