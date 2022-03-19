<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    public function index()
    {
        $informations = Information::all();
        return $informations;
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
