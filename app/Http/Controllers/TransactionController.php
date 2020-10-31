<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {

        // $transaction = Transaction::with('uid')->get
        //$transaction = DB::select('select * from transactions join users on transactions.user_id = users.id');

        // var_dump($transaction);
        // return;

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
            'username' => $request->username,
            'book'=>  $request->book,
            'Borrow_date' => $request->borrow_date,
            'Return_date' => $request->return_date,
            'keterangan' => $request->keterangan
        ]);

        return redirect('/dashboard');
    }

    public function delete($id)
    {
        // $transaction = Transaction::find($id);
        // $transaction->delete();
        // return view('dashboard');

        //return redirect('/dashboard') -> with('status', 'Data Buku Berhasil DiHapus');
        // return redirect()->route('dashboard')
            // ->with('success', 'Book deleted successfully');

        DB::table('transactions')->where('id', $id)->delete();
        return redirect('/dashboard');

    }
}





