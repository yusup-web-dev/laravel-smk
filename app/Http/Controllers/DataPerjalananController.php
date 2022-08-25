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

    public function edit($id_perjalanan){
            $dataPerjalanan = CatatanPerjalanan::find($id_perjalanan);
            return view('dataperjalanan.edit', compact(['dataPerjalanan']));
    }
}
