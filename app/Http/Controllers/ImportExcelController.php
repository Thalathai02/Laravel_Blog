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
     $data = reg_std::orderBy('id', 'ASC')->get();
     return view('STD.index', compact('data'));
    }

    function import(Request $request)
    {
        $request->validate([
            'import_file' => 'required|mimes:xls,xlsx'
        ]);
        Excel::import(new UsersImport, request()->file('import_file'));
        return back()->with('success', 'Contacts imported successfully.');
    }
    public function create()
    {
        return view('STD.Std_create');
    
    }
    public function store(Request $request)
    {
        $request->validate([
            

            'std_code'=>'required',
            'name',
            'nick_name',
            'phone',
            'lineId',
            'email'=>'required|email',
            'facebook',
            'address',
            'parent_name',
            'parent_phone',
            'user',
            'password'
        ]);
        reg_std::create($request->all());
        return redirect('/STD');
    
    }
}


