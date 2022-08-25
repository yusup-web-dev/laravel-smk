
@extends('layouts.master')
 @section('content')
 <div class="container py-5">
     <form action="/dataperjalanan/store" method="POST">
         @csrf
         <input class="form-control "type="text" name="user_id" placeholder="id_user"><br>
         <input class="form-control "type="text" name="nama" placeholder="nama"><br>
         <input class="form-control " type="date" name="tanggal"><br>
         <input class="form-control "type="text" name="lokasi"  placeholder="lokasi"><br>
         <input class="form-control " type="time" name="waktu"><br>
         <input class="form-control " type="number" name="suhu"  placeholder="suhu"><br>
         <button class="btn btn-primary" type="submit" name="submit">Isi Data</button>
     </form>
 </div>
@endsection