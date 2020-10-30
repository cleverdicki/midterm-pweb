@extends('layouts.index')

@section('content')

<div class="row">
    <div class="col-md-12">
        <p>
            <a href="javascript:history.back()" class="btn btn-sm btn-flat btn-primary">Back</a>
        </p>
        <div class="box box-warning">
            <div class="box-header">
                <h4>Review {{ $title }}</h4>
            </div>
            <div class="box-body">
                <form role="form" method="post" action="{{ url('/updateRev'. $dt->title) }}">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="title">Book Title</label>
                            <input type="text" name="title" value="{{ $dt->title }}" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Book Title">
                        </div>
                        <div class="form-group">
                            <label for="bookreview">Book Review</label>
                            <textarea class="form-control summernote @error('title') is-invalid @enderror" name="addreview" value="{{ $dt->book_review }}" id="addreview" placeholder="Write down your review in this box"></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->
        
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection