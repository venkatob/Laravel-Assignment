<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use DB;
class bookcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book= book::all();
        return view('index')->with('book',$book);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'ID'=>'required',
        'BookTitle'=>'required'
    ]);
        $book=new book;
        $book->ID=$request->input('ID');
        $book->BookTitle=$request->input('BookTitle');
        $book->save();

        return redirect('/book')->with('success','book added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return book::find($id);
        return view('show')->with('book',$book);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book=book::find($id);
        return view('edit')->with('book',$book);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
        'ID'=>'required',
        'BookTitle'=>'required'
    ]);
        $book=book::find($id);
        $book->ID=$request->input('ID');
        $book->BookTitle=$request->input('BookTitle');
        $book->save();

        return redirect('/book')->with('success','book Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book=book::find($id);
        $book->delete();
        return redirect('/book')->with('success','book deleted');

    }
}
