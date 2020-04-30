<div class="table-responsive">
    <table class="table" id="wards-table">
        <thead>
            <tr>
                <th>Ward</th>
        <th>Num of patients</th>
        <th>Doctors on duty</th>
        <th>Nurses on duty</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($wards as $wards)
            <tr>
                <td>{{ $wards->Ward }}</td>
            <td>{{ $wards->NumofPatients }}</td>
            <td>{{ $wards->DoctorsonDuty }}</td>
            <td>{{ $wards->NursesonDuty }}</td>
                <td>
                    {!! Form::open(['route' => ['wards.destroy', $wards->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('wards.show', [$wards->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('wards.edit', [$wards->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
