<!-- Codigo Colectivo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('codigo_colectivo', 'Codigo Colectivo:') !!}
	{!! Form::text('codigo_colectivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Nombre Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Aseguradora Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('codigo_aseguradora', 'Codigo Aseguradora:') !!}
	{!! Form::text('codigo_aseguradora', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
