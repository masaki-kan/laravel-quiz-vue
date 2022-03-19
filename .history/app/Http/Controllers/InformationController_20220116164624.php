<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Information;

class InformationController extends Controller
{
    //
    public function index()
    {
        $informations = Information::all();

        return $informations;
    }
}
