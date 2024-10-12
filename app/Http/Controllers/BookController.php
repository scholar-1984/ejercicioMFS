<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $table = Helper::getColsNamesAndData('books', Book::class);

        return view('book.index', ['records' => $table['all_records'], 'cols' => $table['column_names']]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all_authors = Author::all();
        $all_categories = Category::all();
        return view('book.create', ['authors' => $all_authors, 'categories' => $all_categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
        $new = new Book();
        $new->title = $request->title;
        $new->author_id = $request->author_id;
        $new->category_id = $request->category_id;
        $new->price = $request->price;
        $new->save();
        return redirect()->action([BookController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
