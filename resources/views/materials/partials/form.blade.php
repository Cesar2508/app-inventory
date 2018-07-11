<div class="form-group">
{{Form::label('materialfamily','Familia de materiales')}}
{{Form::select('materialfamily',$materialsFamilies , null, ['placeholder' => 'Elegir familia...'],['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::label('submaterialfamily','Sub Familia de materiales')}}
{{Form::select('submaterialfamily',$materialsSubFamilies , null, ['placeholder' => 'Elegir subfamilia...'],['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::label('name','Nombre del material')}}
{{Form::text('name',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::label('units','Unidades')}}
{{Form::text('units',null,['class'=>'form-control'])}}
</div>

<div class="form-group">
{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>
