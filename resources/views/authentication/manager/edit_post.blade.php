@extends('layout.master_login')
@section('content')

                <h3>Edit Test Input</b></h3>

           <form action="/update/{{$posts->id}}" method="POST">
                  
                  {{method_field('PUT')}}
                  {{ csrf_field() }}

                 <input type="text" name="test" value="{{$posts->test}}">
                <input type="submit" value="Edit" class=" btn btn-primary">
@endsection