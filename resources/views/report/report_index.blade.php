@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });
} );
</script>
@stop

@extends('layouts.index')

@section('content')
<div class="row">
    <div class="row" style="margin-top: 20px;">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Laporan Transaksi</h4>
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-info">
                            <a href="{{ url('/report/trs/pdf') }}"><i class="fa fa-download"></i> Export PDF</a>
                        </button>
                    </div>
                    {{-- <div class="btn-group dropdown">
                        <button type="button" class="btn btn-success">
                           <a href="{{ url('/report/trs/excl') }}"><i class="fa fa-download"></i> Export EXCEL</a>
                        </button>
                    </div> --}}
                </div>
            </div>
            <div class="card mt-3">
                <div class="card-body">
                    <h4 class="card-title">Laporan Buku</h4>
                    <div class="btn-group dropdown">
                        <button type="button" class="btn btn-info">
                            <a href="{{ url('/report/book/pdf') }}"><i class="fa fa-download"></i> Export PDF</a>
                        </button>
                    </div>
                    {{-- <div class="btn-group dropdown">
                        <button type="button" class="btn btn-success">
                            <a href="{{ url('/report/book/excl') }}"><i class="fa fa-download"></i> Export EXCEL</a>
                        </button>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection