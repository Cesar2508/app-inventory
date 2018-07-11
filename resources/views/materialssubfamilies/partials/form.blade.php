<div class="form-group">
{{Form::label('materialfamily','Familia de materiales')}}
{{Form::select('materialfamily',$materialsFamilies , null, ['placeholder' => 'Elegir familia...'],['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::label('name','Nombre de la subfamilia de materiales')}}
{{Form::text('name',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
