@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Familia de materiales</div>
                <div class="card-body">
                  {!!Form::model($materialSubFamily,['route' => ['materialssubfamilies.update',$materialSubFamily->id],
                    'method' => 'PUT'])!!}

                      @include('materialssubfamilies.partials.form')
                  {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
