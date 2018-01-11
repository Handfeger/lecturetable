@extends('backLayout.app')
@section('title')
Rythmtype
@stop

@section('content')

    <h1>Rythmtype <a href="{{ url('rythmtype/create') }}" class="btn btn-primary pull-right btn-sm">Add New Rythmtype</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblrythmtype">
            <thead>
                <tr>
                    <th>ID</th><th>Type</th><th>Name</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($rythmtype as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('rythmtype', $item->id) }}">{{ $item->type }}</a></td><td>{{ $item->name }}</td>
                    <td>
                        <a href="{{ url('rythmtype/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['rythmtype', $item->id],
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
        $('#tblrythmtype').DataTable({
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