<form action="/dataperjalanan/{{$dataPerjalanan->id}}" method="POST">
    @method('put')
    @csrf
    <input type="text" name="user_id" placeholder="id_user" value="{{$dataPerjalanan->user_id}}"><br>
    <input type="text" name="nama" placeholder="nama" value="{{$dataPerjalanan->nama}}"><br>
    <input type="date" name="tanggal" value="{{$dataPerjalanan->tanggal}}"><br>
    <input type="text" name="lokasi"  placeholder="lokasi" value="{{$dataPerjalanan->lokasi}}"><br>
    <input type="time" name="waktu" value="{{$dataPerjalanan->waktu}}"><br>
    <input type="number" name="suhu" value="{{$dataPerjalanan->suhu}}"><br>
    <button type="submit" name="submit">Isi Data</button>
</form>