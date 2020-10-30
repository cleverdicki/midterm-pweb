<!-- ambil dari add trus tambahin value, misal
value="{{ $dt-> title }}"
kalau ada dropdown
@foreach($genre as $gr)
<option value="{{ $gr-> id }}" {{ ($dt ->genre == $gr->id) ? 'selected' : '' }}>{{ $gr->name }}</option>
@endforeach -->

@extends('layouts.index')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Add New Book</h1>
            <form method="POST" action="{{ url('updateBook'. $dt->id)}}">
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                  <label for="title_book">Book Title</label>
                  <input type="text" value="{{ $dt->genre }}" class="form-control @error('title') is-invalid @enderror" id="title_book" placeholder="Insert Book Title" name="title">
                  @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
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
              </form>
        </div>
    </div>
</div>
@endsection