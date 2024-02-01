<h2>Detail Koleksi</h2>

    <div>
        <p align="center"> <img src=public/> {{$koleksi->gambar}} </p> <br> 
        <p> <b>Judul Buku : </b> {{$koleksi->judul_buku}} </p>
        <p> <b>Pengarang : </b> {{$koleksi->pengarang}}</p>
        <p> <b>Genre : </b> {{$koleksi->genre}}</p>
        <p> <b>Harga : </b> {{$koleksi->harga}}</p>
    <div>
    <br>
    <button type="submit"> <a href="{{route('koleksi.index')}}"> Kembali Ke Index </a> </button> 
    <button type="submit"> <a href="{{route('koleksi.edit', $koleksi->id)}}"> Edit Koleksi </a> </button>