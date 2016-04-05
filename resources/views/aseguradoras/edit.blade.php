@extends('layouts')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($aseguradora, ['route' => ['aseguradoras.update', $aseguradora->id], 'method' => 'patch']) !!}

        @include('aseguradoras.fields')

    {!! Form::close() !!}
</div>
@endsection
