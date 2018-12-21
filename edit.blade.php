@extends('app')

@section('content')
<h1>EditBook</h1>


{!! Form::open(['action' => ['bookcontroller@update',$book->id],'method'=>'POST'])!!}
    <div class="form-group">
    	{{Form::label('ID','ID')}}
    	{{Form::text('ID',$book->id,['class'=>'form-control','placeholder'=>'ID'])}}
    </div>
     <div class="form-group">
    	{{Form::label('BookTitle','BookTitle')}}
    	{{Form::text('BookTitle',$book->BookTitle,['class'=>'form-control','placeholder'=>'BookTitle'])}}
    </div>

     {{form::hidden('_method','PUT')}}

    {{form::submit('submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection