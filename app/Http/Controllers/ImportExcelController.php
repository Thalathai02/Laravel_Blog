<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\reg_std;

class ImportExcelController extends Controller
{
    function index()
    {
     $data = reg_std::orderBy('id', 'DESC')->get();
     return view('STD.NameStd', compact('data'));
    }

    function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
        Excel::import(new UsersImport, request()->file('import_file'));
        return back()->with('success', 'Contacts imported successfully.');
    }
}


