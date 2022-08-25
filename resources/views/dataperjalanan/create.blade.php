<form action="/dataperjalanan/store" method="POST">
    @csrf
    <input type="text" name="user_id" placeholder="id_user"><br>
    <input type="text" name="nama" placeholder="nama"><br>
    <input type="date" name="tanggal"><br>
    <input type="text" name="lokasi"  placeholder="lokasi"><br>
    <input type="time" name="waktu"><br>
    <input type="number" name="suhu"  placeholder="suhu"><br>
    <button type="submit" name="submit">Isi Data</button>
</form>