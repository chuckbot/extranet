@extends('layouts')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Subsidiaries</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('subsidiaries.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($subsidiaries->isEmpty())
                <div class="well text-center">No Subsidiaries found.</div>
            @else
                @include('subsidiaries.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $subsidiaries])


    </div>
@endsection
