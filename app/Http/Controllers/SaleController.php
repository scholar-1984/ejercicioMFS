<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (isset($request->desired_book)) {
            $book_sales = Sale::where('book_id', $request->desired_book)->get();
            if (count($book_sales)==0) {
                return view('sale.nosalesfound');
            } else {
                $cols = Schema::getColumnListing('sales');
                array_pop($cols);
                array_pop($cols);
                return view('sale.index', ['records' => $book_sales, 'cols' => $cols]);
            }
        } else {
            $table = Helper::getColsNamesAndData('sales', Sale::class);

            return view('sale.index', ['records' => $table['all_records'], 'cols' => $table['column_names']]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
