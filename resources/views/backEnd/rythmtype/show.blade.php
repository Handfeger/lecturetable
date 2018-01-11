@extends('backLayout.app')
@section('title')
Rythmtype
@stop

@section('content')

    <h1>Rythmtype</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Type</th><th>Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $rythmtype->id }}</td> <td> {{ $rythmtype->type }} </td><td> {{ $rythmtype->name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection