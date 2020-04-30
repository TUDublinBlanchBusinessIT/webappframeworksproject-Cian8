
<div class="table-responsive">
    <table class="table" id="doctors-table">
	
        <thead>
            <tr>
                <th>Doctorid</th>
        <th>Firstname</th>
        <th>Surname</th>
        <th>Dateofbirth</th>
        <th>Feild</th>
        <th>Salary</th>
        <th>Employement</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($doctors as $doctors)
            <tr>
                <td>{{ $doctors->Doctorid }}</td>
            <td>{{ $doctors->firstname }}</td>
            <td>{{ $doctors->surname }}</td>
            <td>{{ $doctors->dateofbirth }}</td>
            <td>{{ $doctors->Feild }}</td>
            <td>{{ $doctors->Salary }}</td>
            <td>{{ $doctors->Employement }}</td>
                <td>
                    {!! Form::open(['route' => ['doctors.destroy', $doctors->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('doctors.show', [$doctors->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('doctors.edit', [$doctors->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
