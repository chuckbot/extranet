@extends('layouts')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'especialidadesExtranets.store']) !!}

        @include('especialidadesExtranets.fields')

    {!! Form::close() !!}
</div>
@endsection
