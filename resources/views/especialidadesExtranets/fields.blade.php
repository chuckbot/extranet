<!-- Codigo Especialidad Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('codigo_especialidad', 'Codigo Especialidad:') !!}
	{!! Form::text('codigo_especialidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Rama Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('rama', 'Rama:') !!}
	{!! Form::text('rama', null, ['class' => 'form-control']) !!}
</div>

<!-- Descripcion Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
