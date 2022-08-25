

<a href="dataperjalanan/create">tambah data</a>
<table border="2">
    <tr>
        <th>NAMA</th>
        <th>TANGGAL</th>
        <th>LOKASI</th>
        <th>WAKTU</th>
        <th>SUHU</th>
        <th>AKSI</th>
    </tr>
    @foreach($dataPerjalanan as $data )
       <tr>
        <td>{{$data->nama}}</td>
        <td>{{$data->tanggal}}</td>
        <td>{{$data->lokasi}}</td>
        <td>{{$data->waktu}}</td>
        <td>{{$data->suhu}}</td>
        <td><a href="/dataperjalanan/{{$data->id}}/edit">Edit</a></td>
       </tr>
       @endforeach
</table>

