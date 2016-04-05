@extends('layouts')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($subsidiary, ['route' => ['subsidiaries.update', $subsidiary->id], 'method' => 'patch']) !!}

        @include('subsidiaries.fields')

    {!! Form::close() !!}
</div>
@endsection
