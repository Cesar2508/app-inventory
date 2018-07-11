@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Sub familia de Material</div>
                <div class="card-body">
                  {!!Form::model($materialsFamilies,['route' =>  'materialssubfamilies.store']) !!}

                      @include('materialssubfamilies.partials.form')
                  {!!Form::close()!!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
