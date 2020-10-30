<<<<<<< HEAD
=======
<!-- ambil dari add trus tambahin value, misal
value="{{ $dt-> title }}"
kalau ada dropdown
@foreach($genre as $gr)
<option value="{{ $gr-> id }}" {{ ($dt ->genre == $gr->id) ? 'selected' : '' }}>{{ $gr->name }}</option>
@endforeach -->

>>>>>>> 665bd1cbd72c387df898e9feb5ac12e333c9f164
@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
<<<<<<< HEAD
            <h1 class="mt-3">Form edit data buku</h1>
            <form method="POST" action="{{ url('/updatebook/'.$dt->id)}}">
                @method('patch')
                @csrf
                <div class="form-group">
                  <label for="title_book">Judul Buku</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title_book" placeholder="Masukkan judul buku" name="title" value="{{ $dt->title }}">
=======
            <h1 class="mt-3">Add New Book</h1>
            <form method="POST" action="{{ url('updateBook'. $dt->id)}}">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="title_book">Book Title</label>
                  <input type="text" value="{{ $dt->genre }}" class="form-control @error('title') is-invalid @enderror" id="title_book" placeholder="Insert Book Title" name="title">
>>>>>>> 665bd1cbd72c387df898e9feb5ac12e333c9f164
                  @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
<<<<<<< HEAD
                    <input type="text" class="form-control" id="isbn" placeholder="Masukkan ISBN" name="ISBN" value="{{ $dt->ISBN }}">
                </div>
                <div class="form-group">
                    <label for="genre_book">Genre buku</label>
                    <input type="text" class="form-control" id="genre_book" placeholder="Masukkan genre buku" name="genre" value="{{ $dt->genre }}">
                </div>
                <div class="form-group">
                    <label for="quantity_book">Banyak buku</label>
                    <input type="text" class="form-control" id="quantity_book" placeholder="Masukkan jumlah buku" name="stock" value="{{ $dt->stock }}">
                </div>
                <div class="form-group">
                    <label for="writer_book">Penulis</label>
                    <input type="text" class="form-control" id="writer_book" placeholder="Masukkan penulis buku" name="writer" value="{{ $dt->writer }}">
                </div>
                <div class="form-group">
                    <label for="publisher_book">Penerbit</label>
                    <input type="text" class="form-control" id="publisher_book" placeholder="Masukkan penerbit buku" name="publisher" value="{{ $dt->publisher }}">
                </div>
                <div class="form-group">
                    <label for="year_book">Tahun terbit</label>
                    <input type="text" class="form-control" id="year_book" placeholder="Masukkan tahun terbit buku" name="year" value="{{ $dt->year }}">
                </div>
                <div class="form-group">
                    <label for="desc_book">Deskripsi buku</label>
                    <input type="text" class="form-control" id="desc_book" placeholder="Masukkan deskripsi buku" name="desc" value="{{ $dt->desc }}">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Edit data</button>
=======
                    <input type="text" value="{{ $dt->ISBN }}" class="form-control" id="isbn" placeholder="Insert ISBN" name="ISBN">
                </div>
                <div class="form-group">
                    <label for="genre_book">Book Genre</label>
                    <input type="text" value="{{ $dt->genre }}" class="form-control" id="genre_book" placeholder="Insert Book Genre" name="genre">
                </div>
                <div class="form-group">
                    <label for="quantity_book">Book Quantities</label>
                    <input type="text" value="{{ $dt->stock }}" class="form-control" id="quantity_book" placeholder="Insert Book Stock" name="stock">
                </div>
                <div class="form-group">
                    <label for="writer_book">Author</label>
                    <input type="text" value="{{ $dt->writer }}" class="form-control" id="writer_book" placeholder="Insert Book Author" name="writer">
                </div>
                <div class="form-group">
                    <label for="publisher_book">Publisher</label>
                    <input type="text" value="{{ $dt->publisher }}" class="form-control" id="publisher_book" placeholder="Insert Book Publisher" name="publisher">
                </div>
                <div class="form-group">
                    <label for="year_book">Year of Issue</label>
                    <input type="text" value="{{ $dt->year }}" class="form-control" id="year_book" placeholder="Insert the year of Publication of the Book" name="year">
                </div>
                <div class="form-group">
                    <label for="desc_book">Book Description</label>
                    <input type="text" value="{{ $dt->desc }}" class="form-control" id="desc_book" placeholder="Any Book Description?" name="desc">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Update</button>
>>>>>>> 665bd1cbd72c387df898e9feb5ac12e333c9f164
              </form>
        </div>
    </div>
</div>
@endsection