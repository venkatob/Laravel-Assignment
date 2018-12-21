@extends('app')


@section('content')

        <h1>List of Books 
        </h1>

        @if(count($book)>1)

        	@foreach($book as $book)
        	<div class="well">
        		<h3><a href="/book/{{$book->id}}">
        			{{$book->booktitle}}
        		</a>
        		</h3>
        		<small>written on 
        			{{$book->created_at}}</small>
        	</div>
        	@endforeach

        @else
        <p>No POSt FOund</p>
        @endif
<a href="/book/{{$book->id}}/edit" class="btn btn-default"><h3>Edit</h3></a>

{!!Form::open(['action' => ['bookcontroller@destroy',$book->id],'method'=>'POST','class'=>'pull-right'])!!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}

@endsection
