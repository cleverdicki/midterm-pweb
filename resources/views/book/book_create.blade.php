@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Add New Book Form</h1>
            <form method="POST" action="{{ url('addBook')}}">
                @csrf
                <div class="form-group">
                  <label for="title_book">Book title</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title_book" placeholder="Masukkan judul buku" name="title">
                  @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" placeholder="Insert ISBN" name="ISBN">
                </div>
                <div class="form-group">
                    <label for="genre_book">Book Genre</label>
                    <input type="text" class="form-control" id="genre_book" placeholder="What is the genre of the book?" name="genre">
                </div>
                <div class="form-group">
                    <label for="quantity_book">Book Quantities</label>
                    <input type="text" class="form-control" id="quantity_book" placeholder="Insert book stock" name="stock">
                </div>
                <div class="form-group">
                    <label for="writer_book">Author</label>
                    <input type="text" class="form-control" id="writer_book" placeholder="Who is the author?" name="writer">
                </div>
                <div class="form-group">
                    <label for="publisher_book">Publisher</label>
                    <input type="text" class="form-control" id="publisher_book" placeholder="Who is the publisher?" name="publisher">
                </div>
                <div class="form-group">
                    <label for="year_book">Year of Issue</label>
                    <input type="text" class="form-control" id="year_book" placeholder="Year of publication" name="year">
                </div>
                <div class="form-group">
                    <label for="desc_book">Book Description</label>
                    <input type="text" class="form-control" id="desc_book" placeholder="Any description for this book?" name="desc">
                </div>
                <button type="submit" class="btn btn-primary mb-3">Add Data</button>
              </form>
        </div>
    </div>
</div>
@endsection