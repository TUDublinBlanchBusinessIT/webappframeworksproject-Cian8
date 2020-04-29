<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $patients->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $patients->surname }}</p>
</div>

<!-- Dateofbirth Field -->
<div class="form-group">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    <p>{{ $patients->dateofbirth }}</p>
</div>

<!-- Symptoms Field -->
<div class="form-group">
    {!! Form::label('symptoms', 'Symptoms:') !!}
    <p>{{ $patients->symptoms }}</p>
</div>

<!-- Location Field -->
<div class="form-group">
    {!! Form::label('location', 'Location:') !!}
    <p>{{ $patients->location }}</p>
</div>

