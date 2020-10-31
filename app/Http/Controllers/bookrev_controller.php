<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookrev_controller extends Controller
{
    public function index($title)
    {
        $data = \DB::table('bookrev')->select('id', 'title', 'review', 'created_at')->get();
        return view('book.bookrev_index', compact('title', 'data'));
    }

    public function addrev($title)
    {
        $data = \DB::table('bookrev')->select('title')->get();

        return view('book.book_addrev', compact('title', 'data'));
    }

    public function addrevbook(Request $request)
    {
        \DB::table('bookrev')->insert([
            'title' => $request->title,
            'review' => $request->review,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('dashboard')->with('status', 'Add review successfuly!');
    }

    public function editrev($id)
    {
        // $title = 'Edit Book';
        $dt = \DB::table('bookrev')->where('id', $id)->first();
        //$genre =\DB::table('tabel genre')->get();

        return view('book.book_edrev', compact('dt'));
        //return view('book.book_edrev', compact('title', 'dt', 'genre'));
    }

    public function updaterev(Request $request, $id)
    {
        \DB::table('bookrev')->where('id', $id)
            ->update([
                'title' => $request->title,
                'review' => $request->review,
                'updated_at' => now()
            ]);

        return redirect('dashboard')->with('status', 'Edit review successfully!');
    }

    public function deleterev(Request $request)
    {
        \DB::table('bookrev')->where('id', $request->id)->delete();

        \Session::flash('success', 'Review has been deleted');
        return redirect()->back();
    }
}