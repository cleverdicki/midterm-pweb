@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form tambah data buku</h1>
            <form method="POST" action="{{ url('addBook')}}">
                @csrf
                <div class="form-group">
                  <label for="title_book">Book title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title_book" placeholder="Masukkan judul buku" name="title">
                  @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" placeholder="Masukkan ISBN" name="ISBN">
                </div>
                <div class="form-group">
                    <label for="genre_book">Book Genre</label>
                    <input type="text" class="form-control" id="genre_book" placeholder="Masukkan genre buku" name="genre">
                </div>
                <div class="form-group">
                    <label for="quantity_book">Book Quantities</label>
                    <input type="text" class="form-control" id="quantity_book" placeholder="Masukkan jumlah buku" name="stock">
                </div>
                <div class="form-group">
                    <label for="writer_book">Author</label>
                    <input type="text" class="form-control" id="writer_book" placeholder="Masukkan penulis buku" name="writer">
                </div>
                <div class="form-group">
                    <label for="publisher_book">Publisher</label>
                    <input type="text" class="form-control" id="publisher_book" placeholder="Masukkan penerbit buku" name="publisher">
                </div>
                <div class="form-group">
                    <label for="year_book">Year of Issue</label>
                    <input type="text" class="form-control" id="year_book" placeholder="Masukkan tahun terbit buku" name="year">
                </div>
                <div class="form-group">
                    <label for="desc_book">Book Description</label>
                    <input type="text" class="form-control" id="desc_book" placeholder="Masukkan deskripsi buku" name="desc">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Tambah data</button>
              </form>
        </div>
    </div>
</div>
@endsection