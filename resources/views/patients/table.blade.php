<div class="table-responsive">

    <table class="table" id="patients-table">

        <thead>
            <tr>
                <th>Firstname</th>
        <th>Surname</th>
        <th>Dateofbirth</th>
        <th>Symptoms</th>
        <th>Location</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($patients as $patients)
            <tr>
                <td>{{ $patients->firstname }}</td>
            <td>{{ $patients->surname }}</td>
            <td>{{ $patients->dateofbirth }}</td>
            <td>{{ $patients->symptoms }}</td>
            <td>{{ $patients->location }}</td>
                <td>
                    {!! Form::open(['route' => ['patients.destroy', $patients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('patients.show', [$patients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('patients.edit', [$patients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
