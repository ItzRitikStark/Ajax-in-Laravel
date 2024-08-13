<?php

namespace App\Http\Controllers;

use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{


    public function index()
    {
        $families = Family::all();
        return view('RealTimeDataShow', compact('families'))->render();
    }

    public function fetchData(Request $request)
    {
        $families = Family::all();
        return view('RealTimeDataShow', compact('families'))->render();
    }
    public function getSearch() {
        return view('search');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $data = Family::where('first_name', 'LIKE', "%{$query}%")
                      ->orWhere('last_name', 'LIKE', "%{$query}%")
                      ->get();

        return view('AJAX.searchResult', compact('data'));
    }
}
