@extends('layouts')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'colectivos.store']) !!}

        @include('colectivos.fields')

    {!! Form::close() !!}
</div>
@endsection
