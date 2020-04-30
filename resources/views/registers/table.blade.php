<div class="table-responsive">
    <table class="table" id="registers-table">
        <thead>
            <tr>
                <th>Id</th>
        <th>First name</th>
        <th>Surname</th>
        <th>Date of birth</th>
        <th>Occupation</th>
        <th>Employement</th>
        <th>Date of registration</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($registers as $register)
            <tr>
                <td>{{ $register->id }}</td>
            <td>{{ $register->firstname }}</td>
            <td>{{ $register->surname }}</td>
            <td>{{ $register->dateofbirth }}</td>
            <td>{{ $register->Occupation }}</td>
            <td>{{ $register->Employement }}</td>
            <td>{{ $register->DateofRegistartion }}</td>
                <td>
                    {!! Form::open(['route' => ['registers.destroy', $register->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('registers.show', [$register->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('registers.edit', [$register->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
