<?php

namespace App\Http\Controllers\Library;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Library\BookManagement;

class BookManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BookManagement::all();
        return view('library.bookmanagement.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('library.bookmanagement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new BookManagement();
        $data->book_name = 'book1';
        $data->author = 'TestingBook';
        $data->interpreter = 'TestingBook';
        $data->year_publish = 2548;
        $data->edition = 1;
        $data->isbn = 212224236248;
        $data->book_id = 1;
        $data->url = 'http://book.com';
        $data->category_id = 'a9b8c7d6e5';
        $data->title = 'book1';
        $data->key_word = 'Book book1';
        $data->book_review = 'This is a test add book.';
        $data->cd_copy = 2;
        $data->total_time = '120:30:50';
        $data->book_status = 'reading';
        $data->read_by = 'TestReader';
        $data->comment = 'No comment';
        $data->publish_location = 1;
        $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BookManagement::findOrFail($id);
        return view('library.bookmanagement.show', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = BookManagement::findOrFail($id);
        return view('library.bookmanagement.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = BookManagement::fineOrFail($id);
        $data->book_name = 'book1';
        $data->author = 'TestingBook';
        $data->interpreter = 'TestingBook';
        $data->year_publish = 2548;
        $data->edition = 1;
        $data->isbn = 212224236248;
        $data->book_id = 1;
        $data->url = 'http://book.com';
        $data->category_id = 'a9b8c7d6e5';
        $data->title = 'book1';
        $data->key_word = 'Book book1';
        $data->book_review = 'This is a test add book.';
        $data->cd_copy = 2;
        $data->total_time = '120:30:50';
        $data->book_status = 'reading';
        $data->read_by = 'TestReader';
        $data->comment = 'No comment';
        $data->publish_location = 1;
        $data->save();
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
