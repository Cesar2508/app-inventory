<div class="form-group">
{{Form::label('name','Nombre')}}
{{Form::text('name',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('slug','URL amigable')}}
{{Form::text('slug',null,['class'=>'form-control'])}}
</div>
<div class="form-group">
{{Form::label('description','Descripcion ')}}
{{Form::text('description',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Permission</div>
                <div class="card-body">
                  {!!Form::open(['route' =>  'permissions.store']) !!}
                      @include('permissions.partials.form')
                  {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div> --}}
