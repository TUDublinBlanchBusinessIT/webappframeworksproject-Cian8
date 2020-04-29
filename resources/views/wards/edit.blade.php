@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Wards
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($wards, ['route' => ['wards.update', $wards->id], 'method' => 'patch']) !!}

                        @include('wards.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection