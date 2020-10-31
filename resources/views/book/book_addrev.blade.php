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
                <form role="form" method="post" action="{{ url('/listofbook/review/book/'.$title) }}">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Book Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" placeholder="Book Title">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Book Review</label>
                            <textarea class="form-control @error('title') is-invalid @enderror summernote" name="review" id="review" placeholder="Write down your review in this box"></textarea>
                        </div>
                    </div>
                    <!-- /.box-body -->
        
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection