<!-- Codigo Contrato Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('codigo_contrato', 'Codigo Contrato:') !!}
	{!! Form::text('codigo_contrato', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Afiliado Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cedula_afiliado', 'Cedula Afiliado:') !!}
	{!! Form::text('cedula_afiliado', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
	{!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Fin Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
	{!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Colectivo Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('codigo_colectivo', 'Codigo Colectivo:') !!}
	{!! Form::text('codigo_colectivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Plan Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('codigo_plan', 'Codigo Plan:') !!}
	{!! Form::text('codigo_plan', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
