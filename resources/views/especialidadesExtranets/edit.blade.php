@extends('layouts')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($especialidadesExtranet, ['route' => ['especialidadesExtranets.update', $especialidadesExtranet->id], 'method' => 'patch']) !!}

        @include('especialidadesExtranets.fields')

    {!! Form::close() !!}
</div>
@endsection
