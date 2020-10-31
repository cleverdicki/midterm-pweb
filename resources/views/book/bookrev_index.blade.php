@extends('layouts.index')

@section('content')

<div class="row">
    <div class="col-md-12 mt-3">
        <p>
            <button class="btn btn-flat btn-sm btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
        </p>
        <p>
            <a href="{{ url('/listofbook/review/book/'.$title) }}" class="btn btn-flat btn-primary btn-plus">Add Review</a>
        </p>
        <div class="box box-warning">
            <div class="box-header">
                <h4>{{ $title }}</h4>
            </div>
            <div class="box-body">
                <table class="table table-hover myTable">
                    <thead>
                        <tr>
                            <th>title</th>
                            <th>Book Review</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            {{-- <td>{{ $e+1 }}</td> --}}
                            <td>{{ $dt->title }}</td>
                            <td>{{ $dt->review }}</td>
                            <td>{{ $dt->created_at }}</td>
                            <td>
                                <p>
                                    <a href="{{ url('/listofbook/editreview/book/'.$dt->id) }}" class="btn btn-flat btn-xs btn-warning"><i class="fa fa-edit"></i></a>
                                    <button href="{{ url('../book/'.$dt->id) }}" class="btn-del btn btn-flat btn-xs btn-danger btn-delete" data-toggle="modal" data-modal-id="{{ $dt->id }}" data-target="#modal-notification"><i class="fa fa-trash"></i>
                                    </button>
                                </p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Delete Notif -->
<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
 
          <div class="modal-header">
            <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
 
          <div class="modal-body">
 
            <div class="py-3 text-center">
              <i class="ni ni-bell-55 ni-3x"></i>
              <h4 class="heading mt-4">Do you really want to delete this review?</h4>
            </div>
 
          </div>
 
          <div class="modal-footer">
              <form method="post" action="{{ route('delete.review') }}">
                <input type="hidden" name="id" id="deleteReview">
                
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-white">Ok, Got it</button>
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div> 
        </div>
      </div>
    </div>

@endsection

@section('js')

<script type="text/javascript">
    $(document).ready(function(){
        var flash = "{{ Session::has('success') }}";
        if (flash){
            var msg = "{{ Session::get('success') }}";
            alert (msg);
        }
        
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            location.reload();
        })


    })
    const buttonDelete = document.querySelectorAll('.btn-del');
    console.log(buttonDelete)
    buttonDelete.forEach( btn => {
        btn.addEventListener('click', (e)=>{
            const id = e.target.getAttribute('data-modal-id');
            console.log(id);
            const idDeleteReview = document.getElementById('deleteReview');
            console.log(idDeleteReview)
            idDeleteReview.value = id;
        }) 
    })
</script>

@endsection