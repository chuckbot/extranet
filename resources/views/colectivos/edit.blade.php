@extends('layouts')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($colectivo, ['route' => ['colectivos.update', $colectivo->id], 'method' => 'patch']) !!}

        @include('colectivos.fields')

    {!! Form::close() !!}
</div>
@endsection
