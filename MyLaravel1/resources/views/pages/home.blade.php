@extends('layouts.main-layout')
    @section('content')
        <div>

            <h1>Matches</h1>
            <ul>
                @foreach ($matches as $match)

                <li>
                     <a href="{{route('show-match', $match -> id)}}"><h2>{{ $match -> team1}} - {{ $match -> team2}}</h2></a>

                     <a href="{{route('edit-match', $match -> id)}}"><p>&#9997;</p></a> 
                     
                     
                     <a href="{{route('delete-match', $match -> id)}}"><p> &#128500;</p></a>
                                        

                </li>
                
                @endforeach


            </ul>

            

        </div>
        
       <div>
           <a href="{{route('create-match')}}">Create new match</a>
       </div>
    @endsection