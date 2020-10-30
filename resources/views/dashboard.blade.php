@extends('layouts.index')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
        <div class="card mt-5">
            <div class="card-header text-center">
                <strong>Transaction Data</strong>
            </div>
            <div class="card-body">
                <a href="/dashboard/create" class="btn btn-primary">Add Transaction</a>
                <br/>
                <br/>
                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
        <th>Name</th>
        <th>Borrow Date</th>
        <th>Return Date</th>
        <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
   @foreach($transaction as $key => $value)
       <tr>
           <td>{{$no++}}</td>
           <th>{{auth()->user()->name}}</th>
           <td>{{$value->borrow_date}}</td>
           <td>{{$value->return_date}}</td>
           <td>{{$value->status}}</td>
       </tr>
   @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection





