<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = \App\Item::all();
        return view('admin/ihome', compact('items'));
    }
}
