@extends('layouts')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'subsidiaries.store']) !!}

        @include('subsidiaries.fields')

    {!! Form::close() !!}
</div>
@endsection
