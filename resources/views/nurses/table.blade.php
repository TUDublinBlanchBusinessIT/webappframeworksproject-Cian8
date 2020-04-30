<div class="table-responsive">
    <table class="table" id="nurses-table">
        <thead>
            <tr>
                <th>Ward id</th>
        <th>Nurse id</th>
        <th>First name</th>
        <th>Surname</th>
        <th>Date of birth</th>
        <th>Salary</th>
        <th>Employement</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($nurses as $nurses)
            <tr>
                <td>{{ $nurses->Wardid }}</td>
            <td>{{ $nurses->Nurseid }}</td>
            <td>{{ $nurses->firstname }}</td>
            <td>{{ $nurses->surname }}</td>
            <td>{{ $nurses->dateofbirth }}</td>
            <td>{{ $nurses->Salary }}</td>
            <td>{{ $nurses->Employement }}</td>
                <td>
                    {!! Form::open(['route' => ['nurses.destroy', $nurses->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('nurses.show', [$nurses->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('nurses.edit', [$nurses->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
