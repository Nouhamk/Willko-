<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Visitor;

use \Yajra\DataTables\DataTables;

use Illuminate\Support\Facades;

class VisitorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('login');
    }

    function index()
    {
        return view('visitor');
    }

    function fetch_all(Request $request)
    {
        if ($request->ajax())
        {
            $query = Visitor::join('users' , 'users.id', '=');
            
            $data = $query->get(['visitor.visitor_name', 'visitor.visitor_status', 'visitor.id', 'users.name']);

            return DataTables::of($data)
                ->addIndexColumn()
                ->editColumn('visitor_status', function($row){
                    if ($row->visitor_status == 'In')
                    {
                        return '<span class= "badge bg-success">In</span>';
                    }
                    else 
                    {
                        return '<span class="badge bg-danger">Out</span>';
                    }
                })
                ->escapeColums('visitor_status')
                ->addColumn('action', function($row){
                    if($row->visitor_status == 'In')
                    {
                        return '<a href="/visitor/view/'.$row->id.'" class="btn btn-info btn-sm">View</a>&nbsp;<a href="/visitor/edit/'.$row->id.'" class="btn btn-primary btn-sm">Edit</a>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="'.$row->id.'">Delete</button>
                        ';
                    }
                    else
                    {
                        return '<a href="/visitor/view/'.$row->id.'" class="btn btn-info btn-sm">View</a>&nbsp;<button type="button" class="btn btn-danger btn-sm delete" data-id="'.$row->id.'">Delete</button>';
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }
}

