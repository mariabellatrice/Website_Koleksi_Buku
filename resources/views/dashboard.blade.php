@extends('layout/index')
@section ('dashboard')
    <h2>selamat datang</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Genre</th>
      <th scope="col">Pengarang</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    
  <tbody>
    @foreach($buku as $item)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>

      <td>{{ $item->judul_buku}}</td>
      <td>{{ $item->genre}}</td>
      <td>{{ $item->pengarang}}</td>
      <td>
        <a href="/updatebuku/{{$item->id}}">Edit</a>
        <a href="/deletebuku/{{$item->id}}">Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
@endsection