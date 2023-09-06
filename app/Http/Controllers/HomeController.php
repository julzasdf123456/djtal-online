<?php

namespace App\Http\Controllers;

use App\Models\Posts;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function client($acctNo) {
        return view('/client/index', [
            'accountNo' => $acctNo,
        ]);
    }

    public function printSoa($id) {
        return view('/client/print', [
            'id' => $id,
        ]);
    }
}
