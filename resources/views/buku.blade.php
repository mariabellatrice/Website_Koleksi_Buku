@extends('layout/index')
@section('buku')
<form action="/tambahbuku" method="post">
  @csrf
  <div class="mb-3">
    <label for="judul" class="form-label">Judul Buku</label>
    <input type="text" class="form-control" id="buku" name="judul_buku">
  </div>
  <div class="mb-3">
    <label for="Genre" class="form-label">Genre</label>
    <input type="text" class="form-control" id="genre" name="genre">
  </div>
  <div class="mb-3">
    <label for="pengarang" class="form-label">pengarang</label>
    <input type="text" class="form-control" id="pengarang" name="pengarang">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection