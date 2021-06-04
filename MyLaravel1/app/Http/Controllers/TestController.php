<?php

namespace App\Http\Controllers;

use App\MyMatch;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private function getValidationRule(){
        return [

            'team1'  => 'required|string|min:2|max:255',
            'team2' => 'required|string|min:2|max:255',
            'point1' => 'required|integer|min:0|max:100',
            'point2' => 'required|integer|min:0|max:100',
            'result' => 'required|boolean'
        ];
  
    }

    public function index()
    {
        $matches = MyMatch::all();
        return view('pages.home', compact('matches'));
        
    }
    public function show($id)
    {
        $match = MyMatch::findOrFail($id);
        return view('pages.show', compact('match'));
    }
    public function create()
    {
        return view('pages.create');
    }
    public function store(Request $request)
    {
        $validate = $request -> validate($this->getValidationRule());
        $match = MyMatch::create($validate);
        return redirect()->route('show-match', $match -> id);

    }
    public function edit($id)
    {
        $match = MyMatch::findOrFail($id);
        return view('pages.edit', compact('match'));
    }


    public function update(Request $request, $id)
    {
        $match = MyMatch::findOrFail($id);
        $validate = $request -> validate($this->getValidationRule());
        $match -> update($validate);

        return redirect()->route('show-match', $match -> id);

    }

    public function delete($id)
    {
        $match = MyMatch::findOrFail($id);
        $match -> delete();
        return redirect()->route('home');
        
    }

    
}