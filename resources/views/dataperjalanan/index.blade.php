@extends('layouts.master')
 @section('content')
    <div class="container py-5">
        <a href="dataperjalanan/create" class="btn btn-primary mb-3">Tambah data ++</a>
        <table class="table table-hover">
            <tr class="bg bg-dark text-white">
                <th>NAMA</th>
                <th>TANGGAL</th>
                <th>LOKASI</th>
                <th>WAKTU</th>
                <th>SUHU</th>
                <th width="30%">AKSI</th>
            </tr>
            @foreach($dataPerjalanan as $data )
               <tr>
                <td>{{$data->nama}}</td>
                <td>{{$data->tanggal}}</td>
                <td>{{$data->lokasi}}</td>
                <td>{{$data->waktu}}</td>
                <td>{{$data->suhu}}</td>
                <td class="d-flex">
                    <a href="/dataperjalanan/{{$data->id}}/edit" class="btn btn-warning me-3">Edit</a>
            
                    <form action="/dataperjalanan/{{$data->id}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" name="submit" class="btn btn-danger">Delete</button>
                    </form>
               </td>
               </tr>
               @endforeach
        </table>
    </div>
@endsection
