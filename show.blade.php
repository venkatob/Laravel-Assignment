@extends('app')

@section('content')
        <h1>{{$book->booktitle}}</h1>
        <small>written on 
                    {{$book->created_at}}</small>
                    
                    <hr>
                    <a href="/book/{{$book->id}}/edit" class="btn btn-defult">Edit</a>
                
   @endsection
