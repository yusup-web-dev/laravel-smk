<?php

namespace App\Http\Controllers;

use App\Models\CatatanPerjalanan;
use Illuminate\Http\Request;

class DataPerjalananController extends Controller
{
    public function index(){
        $dataPerjalanan = CatatanPerjalanan::all();
        return view('dataperjalanan.index',compact(['dataPerjalanan']));
    }

    public function create(){
        return view('dataperjalanan.create');
    }

    public function store(Request $request){

        CatatanPerjalanan::create($request->except(['_token ', 'submit']));
        return redirect('/dataperjalanan');
        
    }

    public function edit($id){
            $dataPerjalanan = CatatanPerjalanan::find($id);
            return view('dataperjalanan.edit', compact(['dataPerjalanan']));
    }

    public function update($id, Request $request){
        $dataPerjalanan = CatatanPerjalanan::find($id);
        $dataPerjalanan->update($request->except(['_token ', 'submit']));
        return redirect('/dataperjalanan');
        
    }

    public function destroy($id){
        $dataPerjalanan = CatatanPerjalanan::find($id);
        $dataPerjalanan->delete();
        return redirect('/dataperjalanan');
    }

}
