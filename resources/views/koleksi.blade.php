<h2> Koleksi Buku</h2>

	<table border="1" cellspacing="0" width="100%">

    	<tr>
        <th>ID</th>
        <th>Judul Buku</th>
        <th>Genre</th>
        <th>Pengarang</th>
        <th>Detail Buku</th>
        <th>Hapus Buku</th>
    	</tr>

    	@foreach ($koleksi as $data)
    	<tr>
        <td>{{$data->id}}</td>
        <td>{{$data->judul_buku}}</td>
        <td>{{$data->genre}}</td>
        <td>{{$data->pengarang}}</td>
        <td></td>
        <td></td>
    	</tr>
    	@endforeach

	</table>