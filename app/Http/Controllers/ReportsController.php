<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
use Illuminate\Support\Facades\Redirect;
use Auth;
use DB;
use App\Exports\Book_ListExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class ReportsController extends Controller
{
    public function index()
    {
        return view('report.report_index');
    }

    public function bookPdf()
    {
        $reports = DB::table('book_list')
            ->select('id', 'genre', 'ISBN', 'title', 'writer', 'publisher', 'year', 'desc', 'stock')->get();
        $pdf = PDF::loadview('report.report_bookpdf', compact('reports'));
        return $pdf->download('report_book_' . date('Y-m-d_H-i-s') . '.pdf');
    }

    public function transactionPdf()
    {
        $reports = DB::table('transactions')
            ->select('id', 'username', 'book', 'borrow_date', 'return_date', 'status', 'keterangan')->get();
        $pdf = PDF::loadview('report.report_transactionpdf', compact('reports'));
        return $pdf->download('report_transaction_' . date('Y-m-d_H-i-s') . '.pdf');
    }
}