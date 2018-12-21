@extends('app')

@section('content')
<h1>Adding new Book</h1>

{!! Form::open(['action' => 'bookcontroller@store','method'=>'POST']) !!}
    <div class="form-group">
    	{{Form::label('ID','ID')}}
    	{{Form::text('ID','',['class'=>'form-control','placeholder'=>'ID'])}}
    </div>
     <div class="form-group">
    	{{Form::label('BookTitle','BookTitle')}}
    	{{Form::text('BookTitle','',['class'=>'form-control','placeholder'=>'BookTitle'])}}
    </div>

    {{form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection