<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class book_controller extends Controller
{
    public function index(){
        $title = 'Book List';
        $data = \DB::table('book_list as b')->select('b.genre', 'b.ISBN', 'b.title', 'b.writer', 'b.publisher',  'b.year', 'b.desc', 'b.stock', 'b.created_at', 'b.id')->get();

        return view('book.book_index', compact('title', 'data'));
    }

    public function edit($id){
        $title = 'Edit Book';
        $dt = \DB::table('book_list')->where('id', $id)->first();
        //$genre =\DB::table('tabel genre')->get();

        return view('book.book_edit', compact('title', 'dt'));
        //return view('book.book_edit', compact('title', 'dt', 'genre'));
    }

    public function update(Request $request,$id){
        $genre = $request->genre;
        $ISBN = $request->ISBN;
        $writer = $request->writer;
        $publisher = $request->publisher;
        $year = $request->year;
        $desc = $request->desc;
        $stock = $request->stock;

        \Session::flash('success', 'Book Information has been updated');
        // return redirect ('../book');
    }

    public function delete($id){
        \DB::table('book_list')->where('id', $id)->delete();

        \Session::flash('success', 'Book has been deleted');
        // return redirect('../book');
    }

    public function addrev(){
        $title = 'Add Review';

        return view('book.book_addrev',compact('title'));
    }

    public function storerev(Request $request){
        $title = $request->title;
        $addreview = $request->addreview;

        \DB::table('book_review')->insert([ //tabel review blm ada
            'title'=>$title,
            'addreview'=>$addreview,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        return redirect('../book/..');
    }
}
