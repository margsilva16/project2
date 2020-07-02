<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class publicacoesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $var = auth()->user()->id;
        $publications = DB::select('select * from publication where user_id = :user_id', ['user_id' => $var]);
        return view('list', ['publications' => $publications]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $dados) {
        $teste = auth()->user()->id;

        $message = $dados->message;
        DB::insert('insert into publication (message, user_id) values (?, ?)', [$message, $teste]);
//        $publications = DB::select('select * from publication');
//        return view('pub.list', ['publications' => $publications]);
        return redirect()->action('publicacoesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $deleted = DB::delete('delete from publication where id = :id', ['id' => $id]);
        return redirect()->action('publicacoesController@index');
    }

}
