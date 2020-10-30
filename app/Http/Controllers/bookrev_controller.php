<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookrev_controller extends Controller
{
    public function index($id)
    {
        $title = "Book Review";
        $data = \DB::table('book_list as b')->select('b.title', 'b.bookreview', 'b.created_at')->get();

        return view('book.bookaddrev', compact('title', 'data'));
    }

    public function editrev($title)
    {
        $title = 'Edit Book';
        $dt = \DB::table('book_rev')->where('title', $title)->first();
        //$genre =\DB::table('tabel genre')->get();

        return view('book.book_edrev', compact('title', 'dt'));
        //return view('book.book_edrev', compact('title', 'dt', 'genre'));
    }

    public function updaterev(Request $request, $title)
    {
        $title = $request->title;
        $bookreview = $request->bookreview;

        \DB::table('book_rev')->where('title', $title)->update([
            'bookreview' => $bookreview,
            'updated_at' => date('Y-m-d H:i:s')

        ]);

        \Session::flash('success', 'Review has been updated');
        // return redirect ('../book');
    }

    public function deleterev($title)
    {
        \DB::table('book_rev')->where('tile', $title)->delete();

        \Session::flash('success', 'Review has been deleted');
        // return redirect('../book');
    }
}
