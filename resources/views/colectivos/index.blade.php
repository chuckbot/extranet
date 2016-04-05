@extends('layouts')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Colectivos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('colectivos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($colectivos->isEmpty())
                <div class="well text-center">No Colectivos found.</div>
            @else
                @include('colectivos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $colectivos])


    </div>
@endsection
