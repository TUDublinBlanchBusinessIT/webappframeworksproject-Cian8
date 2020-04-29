<!-- Wardid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Wardid', 'Wardid:') !!}
    {!! Form::number('Wardid', null, ['class' => 'form-control']) !!}
</div>

<!-- Nurseid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nurseid', 'Nurseid:') !!}
    {!! Form::number('Nurseid', null, ['class' => 'form-control']) !!}
</div>

<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>

<!-- Surname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname', null, ['class' => 'form-control']) !!}
</div>

<!-- Dateofbirth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    {!! Form::date('dateofbirth', null, ['class' => 'form-control','id'=>'dateofbirth']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dateofbirth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush

<!-- Salary Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Salary', 'Salary:') !!}
    {!! Form::text('Salary', null, ['class' => 'form-control']) !!}
</div>

<!-- Employement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Employement', 'Employement:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('Employement', 0) !!}
        {!! Form::checkbox('Employement', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('nurses.index') }}" class="btn btn-default">Cancel</a>
</div>
