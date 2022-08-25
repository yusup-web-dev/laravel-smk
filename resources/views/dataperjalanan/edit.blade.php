
@extends('layouts.master')
 @section('content')
 <div class="container py-5" width="30%">
     <form action="/dataperjalanan/{{$dataPerjalanan->id}}" method="POST">
         @method('put')
         @csrf
         <input class="form-control " type="text" name="user_id" placeholder="id_user" value="{{$dataPerjalanan->user_id}}"><br>
         <input class="form-control " type="text" name="nama" placeholder="nama" value="{{$dataPerjalanan->nama}}"><br>
         <input class="form-control " type="date" name="tanggal" value="{{$dataPerjalanan->tanggal}}"><br>
         <input class="form-control " type="text" name="lokasi"  placeholder="lokasi" value="{{$dataPerjalanan->lokasi}}"><br>
         <input class="form-control "  type="time" name="waktu" value="{{$dataPerjalanan->waktu}}"><br>
         <input class="form-control " type="number" name="suhu" value="{{$dataPerjalanan->suhu}}"><br>
         <button class="btn btn-primary" type="submit" name="submit">Edit Data</button>
     </form>
 </div>
@endsection