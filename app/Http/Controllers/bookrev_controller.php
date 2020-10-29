<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookrev_controller extends Controller
{
    public function index(){
        $title = "Book Review";
        $data = \DB::table('book_list as b')->select('b.title', 'b.bookreview', 'b.created_at')->get();

        return view('book.bookrev_index', compact('title', 'data'));
    }

    public function edit($title){
        $title = 'Edit Book';
        $dt = \DB::table('book_rev')->where('title', $title)->first();
        //$genre =\DB::table('tabel genre')->get();

        return view('book.book_edrev', compact('title', 'dt'));
        //return view('book.book_edrev', compact('title', 'dt', 'genre'));
    }

    public function update(Request $request,$title){
        $title = $request->title;
        $bookreview = $request->bookreview;

        \Session::flash('success', 'Review has been updated');
        // return redirect ('../book');
    }

    public function delete($title){
        \DB::table('book_rev')->where('id', $title)->delete();

        \Session::flash('success', 'Review has been deleted');
        // return redirect('../book');
    }
}
