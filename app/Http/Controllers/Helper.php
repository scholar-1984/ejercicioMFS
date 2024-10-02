<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
class Helper
{
    public static function getColsNamesAndData($table_name, $model){
        $data = $model::all();
        $col = Schema::getColumnListing($table_name);
        $cols = collect($col);
        $cols->pop();
        $cols->pop();


        return ['column_names' => $cols, 'all_records' => $data];
    }

}
