<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PaginationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::sortable()->paginate(10);
        return view('users', compact('users'));
    }
}