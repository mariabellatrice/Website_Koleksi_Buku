<h2>Edit Koleksi </h2>

<form action="{{route('koleksi.update', $koleksi->id)}}" method="post">
    @csrf @method('put')
    <div>
        <label for="judul_buku"> Judul Buku </label>
        <input type="text" name="judul_buku" id="judul_buku" value="{{ $koleksi->judul_buku }}">
    </div>

    <div>
        <label for="pengarang"> Pengarang </label>
        <input type="text" name="pengarang" id="pengarang" value="{{ $koleksi->pengarang }}">
    </div>

    <div>
        <label for="genre"> Genre </label>
        <input type="text" name="genre" id="genre" value="{{ $koleksi->genre }}">
    </div>

    <div>
        <label for="harga"> Harga </label>
        <input type="text" name="harga" id="harga" value="{{ $koleksi->harga }}">
    </div>

    <div>
        <label for="gambar"> Ilustrasi Buku </label>
        <input type="src" name="gambar" id="gambar" value="{{ $koleksi->gambar }}">
    </div>

    <input type="submit" value="Edit Koleksi">
</form>