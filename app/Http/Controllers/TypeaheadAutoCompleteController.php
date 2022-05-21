<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Job;

class TypeaheadAutoCompleteController extends Controller
{
    function index()
    {
        return view('typeahead_autocomplete');
    }

    function action(Request $request)
    {
        $data = $request->all();

        $query = $data['query'];

        $filter_data = Job::select('jobName')
                        ->where('jobName', 'LIKE', '%'.$query.'%')
                        ->get();

        return response()->json($filter_data);
    }
}
