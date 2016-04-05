@extends('layouts')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Contratos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('contratos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($contratos->isEmpty())
                <div class="well text-center">No Contratos found.</div>
            @else
                @include('contratos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $contratos])


    </div>
@endsection
