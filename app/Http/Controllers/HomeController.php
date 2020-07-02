<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $id = auth()->user()->id;
        $publications = Publication::where('user_id', $id)->get();
        return view('home', ['publications' => $publications]);
    }

}
