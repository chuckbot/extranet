<!-- Name Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('lastname', 'Lastname:') !!}
	{!! Form::text('lastname', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cedula', 'Cedula:') !!}
	{!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthday Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('birthday', 'Birthday:') !!}
	{!! Form::date('birthday', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Sex Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('sex', 'Sex:') !!}
	{!! Form::select('sex', [ 'M' => 'M', 'F' => 'F' ], null, ['class' => 'form-control']) !!}
</div>

<!-- Val User Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('val_user', 'Val User:') !!}
	{!! Form::text('val_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Subsidiary Type Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('subsidiary_type', 'Subsidiary Type:') !!}
	{!! Form::text('subsidiary_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('telephone', 'Telephone:') !!}
	{!! Form::text('telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Titular Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cedula_titular', 'Cedula Titular:') !!}
	{!! Form::text('cedula_titular', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
