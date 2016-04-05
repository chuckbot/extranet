@extends('layouts')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'aseguradoras.store']) !!}

        @include('aseguradoras.fields')

    {!! Form::close() !!}
</div>
@endsection
