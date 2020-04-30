<!-- Ward Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Ward', 'Ward:') !!}
    {!! Form::text('Ward', null, ['class' => 'form-control']) !!}
</div>

<!-- Numofpatients Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NumofPatients', 'Numofpatients:') !!}
    {!! Form::number('NumofPatients', null, ['class' => 'form-control']) !!}
</div>

<!-- Doctorsonduty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('DoctorsonDuty', 'Doctorsonduty:') !!}
    {!! Form::number('DoctorsonDuty', null, ['class' => 'form-control']) !!}
</div>

<!-- Nursesonduty Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NursesonDuty', 'Nursesonduty:') !!}
    {!! Form::number('NursesonDuty', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('wards.index') }}" class="btn btn-default">Cancel</a>
</div>
