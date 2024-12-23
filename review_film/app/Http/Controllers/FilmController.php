<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index(){
        $film = DB::table('film')->get();
        return view('film.index',compact('film'));
    }
    public function show($id){
        $film = DB::table('film')->where('id',$id)->first();
        return view('film.show',compact('film'));
    }
    public function destroy($id){
        $film = DB::table('film')->where('id',$id)->delete();
        return redirect('/film');
    }
    public function create(){
        return view('film.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'name'=>'required',
            'name'=>'required',
            'name'=>'required'
        ],
        [
            'required' => ':attribute tidak boleh kosong!'
        ]
        );
        $query = DB::table('film')->insert([
            "name" => $request["name"],
            "name" => $request["name"],
            "name" => $request["name"],
            "name" => $request["name"]
        ]);
        return redirect('/film');
    }
    public function edit($id){
        $film = DB::table('film')->where('id',$id)->first();
        return view('film.edit',compact('film'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'name'=>'required',
            'name'=>'required',
            'name'=>'required'
        ],
        [
            'required' => ':attribute tidak boleh kosong!'
        ]
        );
        $query = DB::table('film')->insert([
            "name" => $request->input('name'),

        ]);
        return redirect('/film');
    }
}