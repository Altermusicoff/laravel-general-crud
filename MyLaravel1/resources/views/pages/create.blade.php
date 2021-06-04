@extends('layouts.main-layout')
    @section('content')
        <div>
            <form action="{{route('store')}}" method="post">

                @csrf
                @method('POST')
                <div>
                    <label for="team1">Team1</label>
                    <input type="text" name="team1" placeholder="newteam1">

                </div>
                <div>
                    <label for="team2">Team2</label>
                    <input type="text" name="team2" placeholder="newteam2">
                    
                </div>
                <div>
                    <label for="point1">point1</label>
                    <input type="number" name="point1" placeholder="newpoint1">

                </div>
                <div>
                    <label for="point2">point2</label>
                    <input type="number" name="point2" placeholder="newpoint2">
                    
                </div>
                <div>
                    <label for="result">Result</label>
                    <select name="result" type='number'>
                        <option value="0">Team1</option>
                        <option value="1">Team2</option>
                    </select>

                </div>
                <div>
                    <input type="submit" value="Create">
                </div>
                



            </form>
        </div>
        
       
    @endsection