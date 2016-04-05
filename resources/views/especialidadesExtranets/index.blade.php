@extends('layouts')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Especialidades_Extranets</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('especialidadesExtranets.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($especialidadesExtranets->isEmpty())
                <div class="well text-center">No Especialidades_Extranets found.</div>
            @else
                @include('especialidadesExtranets.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $especialidadesExtranets])


    </div>
@endsection
