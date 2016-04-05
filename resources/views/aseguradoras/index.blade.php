@extends('layouts')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Aseguradoras</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('aseguradoras.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($aseguradoras->isEmpty())
                <div class="well text-center">No Aseguradoras found.</div>
            @else
                @include('aseguradoras.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $aseguradoras])


    </div>
@endsection
