<h2>Tambah Koleksi </h2>

   <form action="{{route('koleksi.store')}}" method="post">
    @csrf 
    <div>
        <label for="judul_buku"> Judul Buku </label>
        <input type="text" name="judul_buku" id="judul_buku">
    </div>

    <div>
        <label for="pengarang"> Pengarang </label>
        <input type="text" name="pengarang" id="pengarang">
    </div>

    <div>
        <label for="genre"> Genre </label>
        <input type="text" name="genre" id="genre">
    </div>

    <div>
        <label for="harga"> Harga </label>
        <input type="text" name="harga" id="harga">
    </div>

    <div>
        <label for="gambar"> Ilustrasi Buku </label>
        <input type="src" name="gambar" id="gambar">
    </div>

    <input type="submit" value="Buat Koleksi">
   </form>