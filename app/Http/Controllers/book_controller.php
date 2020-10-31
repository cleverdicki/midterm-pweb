<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Svg\Tag\Rect;

class book_controller extends Controller
{
    public function index()
    {
        $title = 'Book List';
        $data = DB::table('book_list as b')->select('b.genre', 'b.ISBN', 'b.title', 'b.writer', 'b.publisher',  'b.year', 'b.desc', 'b.stock', 'b.created_at', 'b.id')->get();

        return view('book.book_index', compact('title', 'data'));
    }

    public function addbookview()
    {
        return view('book.book_create');
    }

    public function addbookstore(Request $request)
    {
        DB::table('book_list')->insert([
            'genre' => $request->genre,
            'ISBN' => $request->ISBN,
            'title' => $request->title,
            'writer' => $request->writer,
            'publisher' => $request->publisher,
            'year' => $request->year,
            'desc' => $request->desc,
            'stock' => $request->stock,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('dashboard')->with('status', 'Add book Successfully!');
    }

    public function editbook($id)
    {
        // $title = 'Edit Book';
        $dt = DB::table('book_list')->where('id', $id)->first();
        // $genre =\DB::table('tabel genre')->get();

        return view('book.book_edit', compact('dt'));
        // return view('book.book_edit', compact('title', 'dt', 'genre'));
    }

    public function updatebook(Request $request, $id)
    {
        DB::table('book_list')->where('id', $id)
            ->update([
                'genre' => $request->genre,
                'ISBN' => $request->ISBN,
                'title' => $request->title,
                'writer' => $request->writer,
                'publisher' => $request->publisher,
                'year' => $request->year,
                'desc' => $request->desc,
                'stock' => $request->stock,
                'update_at' => now()
            ]);

        return redirect('/listofbook')->with('status', 'Edit book Successfully!');
        // return redirect ('../book');
    }

    public function deletebook(Request $request)
    {
        DB::table('book_list')->where('id', $request->id)->delete();

        \Session::flash('success', 'Book has been deleted');
        return redirect()->back();
    }
}
