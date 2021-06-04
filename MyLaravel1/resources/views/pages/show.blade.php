@extends('layouts.main-layout')
    @section('content')
        <div>

            <h1>Match</h1>

            <h2>{{ $match -> team1}} - {{ $match -> team2}}</h2>
            <h3>{{ $match -> point1}} - {{ $match -> point2}}</h3>

        </div>

        <div>
            <a href="{{route('edit-match', $match -> id)}}"><p>&#9997; Modifica</p></a> 
                     
                     
            <a href="{{route('delete-match', $match -> id)}}"><p> &#128500; Cancella</p></a>
        </div>
        
       
    @endsection