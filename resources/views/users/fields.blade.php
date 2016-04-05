<!-- Name Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('department', 'Department:') !!}
	{!! Form::text('department', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('role', 'Role:') !!}
	{!! Form::select('role', [], null, ['class' => 'form-control']) !!}
</div>

<!-- User Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('user', 'User:') !!}
	{!! Form::text('user', null, ['class' => 'form-control']) !!}
</div>

<!-- Salt Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('salt', 'Salt:') !!}
	{!! Form::text('salt', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('password', 'Password:') !!}
	{!! Form::text('password', null, ['class' => 'form-control']) !!}
</div>

<!-- Act Field -->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('act', 'Act:') !!}
	{!! Form::select('act', [ 'S' => 'S', 'N' => 'N' ], null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
