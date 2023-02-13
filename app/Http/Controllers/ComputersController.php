<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{
    // ? Static data
    // private static function getData() {
    //     return [
    //         ['id' => 1, 'brand' => 'DELL', 'origin' => 'USA', 'price' => 300],
    //         ['id' => 2, 'brand' => 'Lenovo', 'origin' => 'Frence', 'price' => 250],
    //         ['id' => 3, 'brand' => 'LG', 'origin' => 'Koria', 'price' => 200],
    //         ['id' => 4, 'brand' => 'HP', 'origin' => 'USA', 'price' => 260],
    //     ];
    // }
    
    // ? Display a listing of the resource.
    public function index() {
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }

    // ? Show the form for creating a new resource.
    public function create(){
        return view('computers.create');
    }

    // ? Store a newly created resource in storage.
    public function store(Request $request){

        $computer = new Computer();

        $request->validate([
            'computer-brand' => 'required',
            'computer-origin' => 'required',
            'computer-price' => 'required|integer',  
        ]);
        
        $computer->brand = strip_tags($request->input('computer-brand'));
        $computer->origin = strip_tags($request->input('computer-origin'));
        $computer->price = strip_tags($request->input('computer-price'));
        
        // * save infos to db
        $computer->save();
        // * redirect
        return redirect()->route('computers.index');
    }

    // ? Display the specified resource.
    public function show($computer){
        return view('computers.show', [
            'computer' => Computer::findOrFail($computer)
        ]);
    }

    // ? Show the form for editing the specified resource.
    public function edit($computer){
        return view('computers.edit', [
            'computer' => Computer::findOrFail($computer)
        ]);
    }

    // ? Update the specified resource in storage.
    public function update(Request $request, $computer){
        $request->validate([
            'computer-brand' => 'required',
            'computer-origin' => 'required',
            'computer-price' => ['required', 'integer'],
        ]);

        $computerToUpdate = Computer::findOrFail($computer);
        $computerToUpdate->brand = strip_tags($request->input('computer-brand'));
        $computerToUpdate->origin = strip_tags($request->input('computer-origin'));
        $computerToUpdate->price = strip_tags($request->input('computer-price'));

        // * save infos to db
        $computerToUpdate->save();
        // * redirect
        return redirect()->route('computers.show', $computer);
    }

    // ? Remove the specified resource from storage.
    public function destroy($computer){
        $computerToDelete = Computer::findOrFail($computer);
        $computerToDelete->delete();
        return redirect()->route('computers.index');
    }
}
