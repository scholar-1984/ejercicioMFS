<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function queryORM1()
    {
        return response()->json($this->allBooksWorthMoreThan50());
    }

    public function queryORM2()
    {
        return response()->json($this->first50BooksWithAuthorAndCategory());
    }

    public function queryORM3()
    {
        return response()->json($this->booksTitlesFromAuthorsWithAnAInTheirNames());
    }

    public function queryORM4()
    {
        return response()->json($this->averageOfBooksPrices());
    }

    public function queryORM5()
    {
        return response()->json($this->quantityOfBooksByCategory());
    }

    public function queryORM6()
    {
        return response()->json($this->averagePriceOfBooksNotBetween10And50());
    }

    public function queryDB1()
    {
        return response()->json($this->bookSales());
    }

    public function queryDB2()
    {
        return response()->json($this->amountOfBookAndTotalPriceByAuthor());
    }

    public function queryDB3()
    {
        return response()->json($this->averageBookPriceByCategory());
    }

    public function queryDB4()
    {
        return response()->json($this->categoriesWithMoreThan10Books());
    }

    public function queryDB5()
    {
        return response()->json($this->booksFromCategories2468());
    }

    public function queryDB6()
    {
        return response()->json($this->maxPriceByAuthor());
    }

    private function allBooksWorthMoreThan50()
    {
        return Book::where('price', '>', 50)->orderBy('title')->get();
    }

    private function first50BooksWithAuthorAndCategory()
    {
        return Book::with('author', 'category')->take(50)->get();;
    }

    private function booksTitlesFromAuthorsWithAnAInTheirNames()
    {
        return Author::join('books', 'books.author_id', 'authors.author_id')->whereLike('name', '%a%')->orderby('title')->get();
    }

    private function averageOfBooksPrices()
    {
        return  Book::avg('price');
    }

    private function quantityOfBooksByCategory()
    {
        return Book::join('categories','categories.category_id','books.category_id')->selectRaw('categories.name \'Nombre categoría\', count(books.category_id) Cantidad')->groupby('books.category_id','categories.name')->get();
    }

    private function averagePriceOfBooksNotBetween10And50()
    {
        return Book::whereNotBetween('book_id', [10, 50])->avg('price');
    }

    private function bookSales()
    {
        return DB::table('sales')->join('books', 'sales.book_id', 'books.book_id')->where('books.book_id', 45)->selectRaw('books.title Titulo, count(sales.book_id) Ventas')->groupBy('books.title')->get();
    }

    private function amountOfBookAndTotalPriceByAuthor()
    {
        return DB::table('authors')->leftJoin('books', 'authors.author_id', 'books.author_id')->selectRaw('authors.name \'Nombre autor\', count(books.author_id) Libros,case when sum(books.price) is null then 0 else sum(books.price) end \'Precio total\'')->groupBy('authors.name')->orderBy('authors.author_id')->get();
    }

    private function averageBookPriceByCategory()
    {

        return DB::table('books')->selectRaw('(select categories.name from categories where categories.category_id = books.category_id) Categoria, avg(books.price) Promedio')->groupBy('books.category_id')->get();
    }

    private function categoriesWithMoreThan10Books()
    {

        return DB::table('books')->join('categories', 'categories.category_id', 'books.category_id')->selectRaw('categories.name Categoria, count(books.category_id) Libros')->groupBy('books.category_id', 'categories.name')->havingRaw('count(books.category_id) > 10')->get();
    }

    private function booksFromCategories2468()
    {
        return DB::table('books')->wherein('books.category_id', [2, 4, 6, 8])->orderBy('category_id')->get();
    }

    private function maxPriceByAuthor()
    {
        return DB::table('books')->join('authors', 'books.author_id', 'authors.author_id')->selectRaw('authors.name Autor, max(books.price) \'Precio maximo de sus libros\'')->groupBy('books.author_id', 'authors.name')->orderby('books.author_id')->get();
    }
}
