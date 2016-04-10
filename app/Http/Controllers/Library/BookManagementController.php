<?php

namespace App\Http\Controllers\Library;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Request as SymfonyRequest;

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
    public function create(SymfonyRequest $request)
    {
        $data = new BookManagement();
        $data->book_name = 'Book1';
        $data->author = 'TestBook';
        $data->interpreter = 'no';
        $data->year_publish = 2016;
        $data->edition = 1;
        $data->isbn = 0;
        $data->book_id = 1;
        $data->url = 'http://testbook.com';
        $data->category_id = 'd55';
        $data->title = 'test book';
        $data->key_word = 'test book';
        $data->book_review = 'This is a test book';
        $data->cd_copy = 1;
        $data->total_time = '72:00';
        $data->book_status = 'reading';
        $data->read_by = 'people';
        $data->comment = 'No comment';
        $data->save();
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
        //
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
