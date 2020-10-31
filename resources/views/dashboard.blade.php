@extends('layouts.index')

@section('content')
<div class="container">
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
        <div class="card mt-5"  >
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
                            <th>Nama Peminjam</th>
                            <th>Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th> Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php $no=1; ?>
                            @foreach($transaction as $key => $value)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$value->username}}</td>
                                    <td>{{$value->book}}</td>
                                    <td>{{$value->borrow_date}}</td>
                                    <td>{{$value->return_date}}</td>
                                    <td> Pinjam </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropbtn">Action</button>
                                            <div class="dropdown-content">
                                            <a href="#">Sudah kembali</a>
                                            <a href="/dashboard/delete/{{$value->id}}">Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection





