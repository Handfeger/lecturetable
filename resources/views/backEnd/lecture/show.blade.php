@extends('backLayout.app')
@section('title')
Lecture
@stop

@section('content')

    <h1>Lecture</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Name</th><th>Rhythm Type Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $lecture->id }}</td> <td> {{ $lecture->name }} </td><td> {{ $lecture->rhythm_type_id }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection