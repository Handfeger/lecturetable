@extends('backLayout.app')
@section('title')
Lecture
@stop

@section('content')

    <h1>Lecture <a href="{{ url('lecture/create') }}" class="btn btn-primary pull-right btn-sm">Add New Lecture</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbllecture">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Rhythm Type Id</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($lecture as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('lecture', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->rhythmType->name }}</td>
                    <td>
                        <a href="{{ url('lecture/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['lecture', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbllecture').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection