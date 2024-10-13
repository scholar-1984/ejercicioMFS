<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use App\View\Components\common\Form;
use App\View\Components\common\FormControl;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $table = Helper::getColsNamesAndData('authors', Author::class);

        $headers = [];
        $headers[] = ['icon' => 'fas fa-id-badge', 'title' => 'Autor'];
        $headers[] = ['icon' => 'fas fa-user', 'title' => 'Nombre'];
        $headers[] = ['icon' => 'fas fa-flag', 'title' => 'Nacionalidad'];
        $records = [];
        foreach ($table['all_records'] as $record) {
            $records[] = [['icon' => '', 'data' => $record->author_id],
            ['icon' => 'fas fa-pen-nib', 'data' => $record->name],
            ['icon' => '', 'data' => $record->nationality]];
        }

        return view('author.authors_table', ['records' => $records, 'headers' => $headers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $controls = [];
        $controls[]= FormControl::createControlArray('fas fa-user','Nombre','text','name','Ingrese el nombre del autor');
        $controls[]= FormControl::createControlArray('fas fa-flag','Nacionalidad','text','nationality','Ingrese la nacionalidad');
        return view('author.author_create',['action' => route('author.create'),'method' => 'POST', 'verb' => '', 'controls' => $controls]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return dd($request->input());
        $new_author = new Author();
        $new_author->name = $request->name;
        $new_author->nationality = $request->nationality;
        $new_author->save();
        return redirect()->back()->with('status','Autor creado con exito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        //
    }
}
