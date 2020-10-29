<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();

        return view('dashboard', compact('transaction'));
    }

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        //Transaction::create($request->all()); //Fungsi untuk menyimpan semua data input

        Transaction::create([
            'user_id' => auth()->id(),
            'Borrow_date' => $request->borrow_date,
            'Return_date' => $request->return_date,
            'status' => $request->status
        ]);

        return redirect('/dashboard');

    }
}





