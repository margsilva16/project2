<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InfoPessoalController extends Controller {

    public function index() {
        $user = User::where('id', auth()->user()->id)->get();
        return view('info', ['info' => $user]);
    }

}
