@extends('layouts.index')

@section('content')

<div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>Add Transaction</strong>
                </div>
                <div class="card-body">
                    <a href="/dashboard" class="btn btn-primary">Back</a>
                    <br/>
                    <br/>

                    <form method="POST" action="/dashboard/store">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text" name="username" class="form-control" id="username">
                        </div>
                        <div class="form-group">
                            <label>Book</label>
                            <input type="text" name="book" class="form-control" id="book">
                        </div>
                        <div class="form-group">
                            <label>Borrow Date</label>
                            <input type="date" name="borrow_date" class="form-control" id="borrow_date">
                        </div>
                        <div class="form-group">
                            <label>Return Date</label>
                            <input type="date" name="return_date" class="form-control" id="return_date">
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <input type="text" name="keterangan" class="form-control" id="keterangan">
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
@endsection


